Drupal.settings.kkblyd_frontpage = function() {
  $("#kkblud-pages-get-table-form :checkbox").attr('checked', false);
}

$(document).ready(function() {
  $("#edit-download").click(function() {
    setTimeout('Drupal.settings.kkblyd_frontpage()', 500);
  });
});