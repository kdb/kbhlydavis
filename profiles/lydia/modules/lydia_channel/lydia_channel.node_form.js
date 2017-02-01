/**
 * Add automatic menu creation with JavaSript on node form.
 */

(function ($) {

Drupal.behaviors.lydiaChannelNodeForm = {
  attach: function (context) {
    $("#edit-title").keypress(function() {
      $("#edit-menu-link-title").val($(this).val());
    });
  }
};
})(jQuery);
