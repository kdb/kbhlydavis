// $Id$

Drupal.behaviors.kkblydAdminNodeForm = function () {
  fileNameFilter = /([^\/]+)\.\w+$/
  $("#edit-field-sound-article-0-upload")
    .change(function (eventObject) {
      var newTitle = fileNameFilter.exec($(this).val())[1];
      if (newTitle && !$("#edit-title").val()) {
        $("#edit-title").val(newTitle);
      }
    });
};

