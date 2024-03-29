<?php

/**
 * @file
 * lydia_channel.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function lydia_channel_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function lydia_channel_node_info() {
  $items = array(
    'lydia_channel' => array(
      'name' => t('Channel'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Chanel name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
