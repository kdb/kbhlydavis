<?php

/**
 * @file
 * lydia_permissions.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function lydia_permissions_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'access administration pages'.
  $permissions['access administration pages'] = array(
    'name' => 'access administration pages',
    'roles' => array(
      'Editor' => 'Editor',
      'Uploader' => 'Uploader',
      'administrator' => 'administrator',
    ),
    'module' => 'system',
  );

  // Exported permission: 'access content overview'.
  $permissions['access content overview'] = array(
    'name' => 'access content overview',
    'roles' => array(
      'Editor' => 'Editor',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'access toolbar'.
  $permissions['access toolbar'] = array(
    'name' => 'access toolbar',
    'roles' => array(
      'Editor' => 'Editor',
      'Uploader' => 'Uploader',
      'administrator' => 'administrator',
    ),
    'module' => 'toolbar',
  );

  // Exported permission: 'administer content types'.
  $permissions['administer content types'] = array(
    'name' => 'administer content types',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'administer nodes'.
  $permissions['administer nodes'] = array(
    'name' => 'administer nodes',
    'roles' => array(
      'Editor' => 'Editor',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'bulk delete files to lydia channel'.
  $permissions['bulk delete files to lydia channel'] = array(
    'name' => 'bulk delete files to lydia channel',
    'roles' => array(
      'Editor' => 'Editor',
      'Uploader' => 'Uploader',
      'administrator' => 'administrator',
    ),
    'module' => 'lydia_channel',
  );

  // Exported permission: 'bypass node access'.
  $permissions['bypass node access'] = array(
    'name' => 'bypass node access',
    'roles' => array(
      'Editor' => 'Editor',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'upload files to lydia channel'.
  $permissions['upload files to lydia channel'] = array(
    'name' => 'upload files to lydia channel',
    'roles' => array(
      'Editor' => 'Editor',
      'Uploader' => 'Uploader',
      'administrator' => 'administrator',
    ),
    'module' => 'lydia_channel',
  );

  // Exported permission: 'view the administration theme'.
  $permissions['view the administration theme'] = array(
    'name' => 'view the administration theme',
    'roles' => array(
      'Editor' => 'Editor',
      'Uploader' => 'Uploader',
      'administrator' => 'administrator',
    ),
    'module' => 'system',
  );

  return $permissions;
}
