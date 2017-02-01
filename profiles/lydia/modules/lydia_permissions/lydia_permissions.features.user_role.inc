<?php
/**
 * @file
 * lydia_permissions.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function lydia_permissions_user_default_roles() {
  $roles = array();

  // Exported role: Editor
  $roles['Editor'] = array(
    'name' => 'Editor',
    'weight' => '3',
  );

  // Exported role: Uploader
  $roles['Uploader'] = array(
    'name' => 'Uploader',
    'weight' => '4',
  );

  return $roles;
}
