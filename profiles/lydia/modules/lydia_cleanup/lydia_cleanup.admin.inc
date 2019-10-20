<?php

/**
 * @file
 * Administration forms and callbacks for lydia cleanup.
 */

/**
 * Form for deleting unused files.
 */
function lydia_cleanup_form($form, &$form_state) {
  $form['#attached'] = array('css' => array(drupal_get_path('module', 'lydia_cleanup') . '/lydia_cleanup.theme.css'));

  $form['lydia_cleanup_audio_files'] = array(
    '#type' => 'checkbox',
    '#title' => t('Delete audio files'),
    '#default_value' => variable_get('lydia_cleanup_audio_files', FALSE),
    '#access' => user_access('delete files from server'),
  );

  $form['lydia_cleanup_zip_files'] = array(
    '#type' => 'checkbox',
    '#title' => t('Delete zip files'),
    '#default_value' => variable_get('lydia_cleanup_zip_files', FALSE),
    '#access' => user_access('delete files from server'),
  );

  $form['lydia_cleanup_days'] = array(
    '#type' => 'textfield',
    '#title' => t('Days to keep unused files'),
    '#default_value' => variable_get('lydia_cleanup_days', '14'),
    '#size' => 1,
  );

  $form['delete'] = array(
    '#type' => 'submit',
    '#value' => t('Delete files now') . ' 🔥',
    '#button_type' => 'danger',
    '#submit' => array('lydia_cleanup_run'),
  );

  return system_settings_form($form);
}
