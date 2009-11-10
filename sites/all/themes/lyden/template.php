<?php
function lyden_preprocess_page(&$vars) {
  $theme_path = base_path() . path_to_theme();
  $vars['ie_styles'] = '<link type="text/css" rel="stylesheet" media="all" href="' . $theme_path . '/css/ie.css" />' . "\n";

  if (arg(0) == 'lydavis') {
    $term = taxonomy_get_term(arg(1));
    if ($term->vid == 5) {
      $vars['body_classes'] .= ' external-' . $term->tid;
    }
  }
}