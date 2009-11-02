<?php
function lyden_preprocess_page(&$vars) {
  $theme_path = base_path() . path_to_theme();
  $vars['ie_styles'] = '<link type="text/css" rel="stylesheet" media="all" href="' . $theme_path . '/css/ie.css" />' . "\n";
}