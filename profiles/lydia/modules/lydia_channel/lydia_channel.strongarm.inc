<?php
/**
 * @file
 * lydia_channel.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function lydia_channel_strongarm() {
  $export = array();

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_lydia_channel';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_lydia_channel'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_lydia_channel';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_lydia_channel'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_lydia_channel';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_lydia_channel'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_lydia_channel';
  $strongarm->value = '1';
  $export['node_preview_lydia_channel'] = $strongarm;

  $strongarm = new stdClass;
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_lydia_channel';
  $strongarm->value = 0;
  $export['node_submitted_lydia_channel'] = $strongarm;

  return $export;
}
