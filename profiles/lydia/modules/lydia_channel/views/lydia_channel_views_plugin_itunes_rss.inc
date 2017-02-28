<?php

/**
 * iTunes style plugin.
 * Basically the RSS style plugin, but with a minor overwrite on the title
 * attribute.
 */
class lydia_channel_views_plugin_itunes_rss extends views_plugin_style_rss {
  /**
   * Take a value and apply token replacement logic to it.
   */
  function tokenize_value($value, $row_index) {
    $title = parent::tokenize_value($value, $row_index);
    // Add the site name to the title:
    $title = variable_get('site_name', 'Drupal') . ': ' . $title;
    return $title;
  }
}
