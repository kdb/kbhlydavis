<?php

/**
 * @file
 * Views handler displaying an integer as a duration
 */
class lydia_channel_views_handler_field_file extends views_handler_field_file {
  function render($values) {
    $output = parent::render($values);
    return substr($output, 0, -4);
  }
}
