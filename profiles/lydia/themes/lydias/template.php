<?php

/**
 * Implements hook_preprocess_html().
 */
function lydias_preprocess_html(&$vars) {
  drupal_add_js(libraries_get_path('webtrends'). '/scripts/webtrends.load.js');
}