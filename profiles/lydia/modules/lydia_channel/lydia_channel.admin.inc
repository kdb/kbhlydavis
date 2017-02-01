<?php

/**
 * @file
 * Administration forms and callbacks for lydia channel.
 */

/**
 * Bulk upload form.
 */
function lydia_channel_plupload_form($form, &$form_state) {
  $nodes = db_select('node', 'n')
    ->fields('n', array('nid', 'title'))
    ->condition('type', 'lydia_channel')
    ->execute();
  $options = array();
  foreach ($nodes as $node) {
    $options[$node->nid] = check_plain($node->title) . ' [nid:' . $node->nid . ']';
  }

  $form['#attached'] = array('css' => array(drupal_get_path('module', 'lydia_channel') . '/lydia_channel.theme.css'));

  $form['delete'] = array(
    '#type' => 'checkbox',
    '#title' => t('Delete all files on channel'),
    '#description' => t('Warning, this action cannot be undone'),
    '#default_value' => 0,
    '#access' => user_access('bulk delete files to lydia channel'),
    '#default_value' => user_access('bulk delete files to lydia channel'),
  );
  
  $form['channel'] = array(
    '#type' => 'select',
    '#title' => t('Channel'),
    '#description' => t('Select the channel you want the files uploaded to.'),
    '#options' => $options,
    '#required' => TRUE,
  );

  $form['files'] = array(
    '#type' => 'plupload',
    '#title' => t('Files'),
    '#description' => t('Select the file you want to upload.'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('mp3'),
    ),
  );

  $form['upload'] = array(
    '#type' => 'submit',
    '#value' => t('Upload'),
  );

  return $form;
}

/**
 * Submit handler for lydia_channel_plupload_form().
 */
function lydia_channel_plupload_form_submit(&$form, &$form_state) {
  $node = node_load($form_state['values']['channel']);
  $node_wrapper = entity_metadata_wrapper('node', $node);
  $files = $node_wrapper->lydia_channel_audio->value();
  if ($form_state['values']['delete']) {
    $delete_count = 0;
    $fids = array(0);
    foreach ($files as $file) {
      $fids[] = $file['fid'];
      $delete_count += 1;
    }
    // Set the files to temporary and reset creation time, to avoid emidiate deletion.
    db_update('file_managed')
      ->fields(array('status' => 0, 'timestamp' => REQUEST_TIME))
      ->condition('fid', $fids, 'IN')
      ->execute();
    // Delete info about file usage, to avoid deletion when removed from the file field.
    db_delete('file_usage')
      ->condition('fid', $fids, 'IN')
      ->execute();
    drupal_set_message(format_plural($delete_count,
      'Deleted 1 file successfully on %node.',
      'Deleted @count files successfully on %node.',
      array('%node' => $node->title))
    );
    $files = array();
  }
  $count = 0;
  foreach ($form_state['values']['files'] as $plupload) {
    if ($plupload['status'] == 'done') {
      $file = file_uri_to_object($plupload['tmppath']);
      $file->filename = $plupload['name'];
      $file->type = 'audio';
      file_save($file);
      $file_wrapper = entity_metadata_wrapper('file', $file);
      $file_wrapper->lydia_channel_filename = preg_replace('/.[a-zA-Z0-9]{1,3}$/', '', $plupload['name']);
      // Shoot in the dark - this should happen at presave - but doesn't right now.
      $playtime = lydia_channel_get_playtime($file);
      $file_wrapper->lydia_channel_playtime = $playtime;
      file_move($file, 'public://lydia-channel/' . transliteration_clean_filename($plupload['name']));
      // File field attributes.
      $file->display = 1;
      $file->description = '';
      $files[] = (array) $file;
      $count += 1;
    }
    else {
      drupal_set_message(t("Error uploading file: @file, upload didn't complete.", array('@name' => $plupload['name'])), 'warning');
    }
  }
  $node->lydia_channel_audio['und'] = $files;
  node_save($node);
  drupal_set_message(format_plural($count,
    'Uploaded 1 file successfully to %node.',
    'Uploaded @count files successfully to %node.',
    array('%node' => $node->title))
  );
}
