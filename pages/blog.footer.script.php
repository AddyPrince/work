<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script>
  $(function () {
    $('#dataTableBlog').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
  });
</script>
