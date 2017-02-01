<?php

/**
 * Implements hook_views_default_views().
 */
function lydia_channel_views_default_views() {
  $views = array();
  
  $view = new view;
  $view->name = 'lydia_channel_file_formatter';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'file_managed';
  $view->human_name = 'Lydia channel file formatter';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'filename' => 'filename',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'filename' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
    ),
  );
  $handler->display->display_options['style_options']['override'] = 1;
  $handler->display->display_options['style_options']['sticky'] = 0;
  $handler->display->display_options['style_options']['empty_table'] = 0;
  /* Relationship: File Usage: Content */
  $handler->display->display_options['relationships']['file_to_node']['id'] = 'file_to_node';
  $handler->display->display_options['relationships']['file_to_node']['table'] = 'file_usage';
  $handler->display->display_options['relationships']['file_to_node']['field'] = 'file_to_node';
  $handler->display->display_options['relationships']['file_to_node']['required'] = 1;
  /* Field: File: Filename */
  $handler->display->display_options['fields']['lydia_channel_filename']['id'] = 'lydia_channel_filename';
  $handler->display->display_options['fields']['lydia_channel_filename']['table'] = 'field_data_lydia_channel_filename';
  $handler->display->display_options['fields']['lydia_channel_filename']['field'] = 'lydia_channel_filename';
  $handler->display->display_options['fields']['lydia_channel_filename']['label'] = '';
  $handler->display->display_options['fields']['lydia_channel_filename']['exclude'] = TRUE;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['path'] = '[uri]';
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['external'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['alter']['html'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['lydia_channel_filename']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['lydia_channel_filename']['hide_empty'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['empty_zero'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['lydia_channel_filename']['field_api_classes'] = 0;
  /* Field: File: Path */
  $handler->display->display_options['fields']['uri']['id'] = 'uri';
  $handler->display->display_options['fields']['uri']['table'] = 'file_managed';
  $handler->display->display_options['fields']['uri']['field'] = 'uri';
  $handler->display->display_options['fields']['uri']['label'] = '';
  $handler->display->display_options['fields']['uri']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['uri']['alter']['text'] = '[lydia_channel_filename]';
  $handler->display->display_options['fields']['uri']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['external'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['uri']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['uri']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['html'] = 0;
  $handler->display->display_options['fields']['uri']['element_label_colon'] = 0;
  $handler->display->display_options['fields']['uri']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['uri']['hide_empty'] = 0;
  $handler->display->display_options['fields']['uri']['empty_zero'] = 0;
  $handler->display->display_options['fields']['uri']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['uri']['link_to_file'] = 1;
  $handler->display->display_options['fields']['uri']['file_download_path'] = 0;
  /* Field: File: File ID */
  $handler->display->display_options['fields']['fid']['id'] = 'fid';
  $handler->display->display_options['fields']['fid']['table'] = 'file_managed';
  $handler->display->display_options['fields']['fid']['field'] = 'fid';
  $handler->display->display_options['fields']['fid']['label'] = '';
  $handler->display->display_options['fields']['fid']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['fid']['alter']['text'] = 'Download';
  $handler->display->display_options['fields']['fid']['alter']['make_link'] = 1;
  $handler->display->display_options['fields']['fid']['alter']['path'] = 'lydia-channel/[fid]/%1';
  $handler->display->display_options['fields']['fid']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['external'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['fid']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['fid']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['fid']['alter']['html'] = 0;
  $handler->display->display_options['fields']['fid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['fid']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['fid']['hide_empty'] = 0;
  $handler->display->display_options['fields']['fid']['empty_zero'] = 0;
  $handler->display->display_options['fields']['fid']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['fid']['link_to_file'] = 0;
  /* Field: File: Playtime in seconds */
  $handler->display->display_options['fields']['lydia_channel_playtime']['id'] = 'lydia_channel_playtime';
  $handler->display->display_options['fields']['lydia_channel_playtime']['table'] = 'field_data_lydia_channel_playtime';
  $handler->display->display_options['fields']['lydia_channel_playtime']['field'] = 'lydia_channel_playtime';
  $handler->display->display_options['fields']['lydia_channel_playtime']['label'] = 'Playtime';
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['external'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['alter']['html'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['element_label_colon'] = 1;
  $handler->display->display_options['fields']['lydia_channel_playtime']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['lydia_channel_playtime']['hide_empty'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['empty_zero'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['lydia_channel_playtime']['type'] = 'lydia_channel_audio_duration';
  $handler->display->display_options['fields']['lydia_channel_playtime']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 0,
  );
  $handler->display->display_options['fields']['lydia_channel_playtime']['field_api_classes'] = 0;
  /* Sort criterion: File: Filename (lydia_channel_filename) */
  $handler->display->display_options['sorts']['lydia_channel_filename_value']['id'] = 'lydia_channel_filename_value';
  $handler->display->display_options['sorts']['lydia_channel_filename_value']['table'] = 'field_data_lydia_channel_filename';
  $handler->display->display_options['sorts']['lydia_channel_filename_value']['field'] = 'lydia_channel_filename_value';
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['relationship'] = 'file_to_node';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'not found';
  $handler->display->display_options['arguments']['nid']['title_enable'] = 1;
  $handler->display->display_options['arguments']['nid']['title'] = '%1';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['nid']['default_argument_skip_url'] = 0;
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['break_phrase'] = 0;
  $handler->display->display_options['arguments']['nid']['not'] = 0;
  /* Filter criterion: File: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'file_managed';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = 'audio';
  /* Filter criterion: File: Status */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'file_managed';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = array(
    1 => '1',
  );
  /* Filter criterion: File Usage: Entity type */
  $handler->display->display_options['filters']['type_1']['id'] = 'type_1';
  $handler->display->display_options['filters']['type_1']['table'] = 'file_usage';
  $handler->display->display_options['filters']['type_1']['field'] = 'type';
  $handler->display->display_options['filters']['type_1']['value'] = 'node';

  /* Display: Feed */
  $handler = $view->new_display('feed', 'Feed', 'feed_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'itunes_rss';
  $handler->display->display_options['row_plugin'] = 'file_rss';
  $handler->display->display_options['path'] = 'node/%/audio-feed';
  $handler->display->display_options['displays'] = array(
    'default' => 'default',
  );
  $translatables['lydia_channel_file_formatter'] = array(
    t('Master'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('Content'),
    t('[uri]'),
    t('[lydia_channel_filename]'),
    t('Download'),
    t('lydia-channel/[fid]/%1'),
    t('Playtime'),
    t('All'),
    t('%1'),
    t('Feed'),
  );

  $views[$view->name] = $view;

  return $views;
}
