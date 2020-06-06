$(document).ready(function() {
    $('select').niceSelect();
    $('.dataTable').DataTable({
      responsive: true,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
      }
    });
    $('.datepicker-dt-fin').datepicker({
          uiLibrary: 'bootstrap4'
    });
    $('.datepicker-dt-db').datepicker({
          uiLibrary: 'bootstrap4'
    });
    $('.datepicker-da').datetimepicker({
          dateFormat: "YYYY-MM-DD HH:mm:ss",
          uiLibrary: 'bootstrap4'
    });
    $('.datepicker-dd').datetimepicker({
          dateFormat: "YYYY-MM-DD HH:mm:ss",
          uiLibrary: 'bootstrap4'
    });
});
