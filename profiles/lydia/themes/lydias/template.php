<?php

/**
 * Implements hook_preprocess_html().
 */
function lydias_preprocess_html(&$vars) {
  drupal_add_js(drupal_get_path('theme', 'lydias') . '/js/webtrekk.js');
}