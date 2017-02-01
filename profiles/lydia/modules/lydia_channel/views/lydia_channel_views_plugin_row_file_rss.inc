<?php
/**
 * @file
 * Contains the node RSS row style plugin.
 */

/**
 * Plugin which performs pull out info on files
 * and formats it as an RSS item.
 */
class lydia_channel_views_plugin_row_file_rss extends views_plugin_row {
  // Basic properties that let the row style follow relationships.
  var $base_table = 'file_managed';
  var $base_field = 'fid';

  // Stores the nodes loaded with pre_render.
  var $nodes = array();

  function option_definition() {
    $options = parent::option_definition();

    $options['item_length'] = array('default' => 'default');

    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $form['item_length'] = array(
      '#type' => 'select',
      '#title' => t('Display type'),
      '#options' => $this->options_form_summary_options(),
      '#default_value' => $this->options['item_length'],
    );
  }

  /**
   * Return the main options, which are shown in the summary title.
   */
  function options_form_summary_options() {
    return array(
      'default' => t('Use default RSS settings'),
    );
  }

  function summary_title() {
    $options = $this->options_form_summary_options();
    return check_plain($options[$this->options['item_length']]);
  }


  function pre_render($values) {
    $fids = array();
    foreach ($values as $row) {
      $fids[] = $row->{$this->field_alias};
    }
    if (!empty($fids)) {
      $this->files = file_load_multiple($fids);
    }
  }

  function render($row) {
    // For the most part, this code is taken from node_feed() in node.module
    global $base_url;

    $fid = $row->{$this->field_alias};
    if (!is_numeric($fid)) {
      return;
    }

    $item_length = $this->options['item_length'];
    if ($item_length == 'default') {
      $item_length = variable_get('feed_item_length', 'teaser');
    }

    // Load the specified file:
    $file = $this->files[$fid];

    if (empty($file)) {
      return;
    }
    $file_wrapper = entity_metadata_wrapper('file', $file);
    $item_text = '';

    $file->rss_namespaces = array('xmlns:dc' => 'http://purl.org/dc/elements/1.1/', 'xmlns:itunes' => 'http://www.itunes.com/dtds/podcast-1.0.dtd');
    
    $file->rss_elements = array(
      array('key' => 'enclosure', 'attributes' => array("url" => file_create_url($file->uri), 'length' => $file->filesize, 'type' => "audio/mpeg")),
      array('key' => 'guid', 'value' => file_create_url($file->uri), 'attributes' => array('isPermaLink' => 'false')),
      array('key' => 'pubDate', 'value' => gmdate('r', $file->timestamp)),
      array('key' => 'itunes:duration', 'value' => lydia_channel_playtime_as_time($file_wrapper->lydia_channel_playtime->value())),
    );

    $this->view->style_plugin->namespaces = array_merge($this->view->style_plugin->namespaces, $file->rss_namespaces);

    $item = new stdClass;
    $item->title = $file_wrapper->lydia_channel_filename->value();
    $item->link = file_create_url($file->uri);
    $item->description = '';
    $item->elements = $file->rss_elements;
    $item->fid = $file->fid;
    $item->readmore = '';

    return theme($this->theme_functions(),
      array(
        'view' => $this->view,
        'options' => $this->options,
        'row' => $item
      ));
  }
}