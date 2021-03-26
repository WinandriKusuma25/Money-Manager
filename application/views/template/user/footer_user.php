
<!-- DataTables -->
<script src="<?php echo base_url('asset/admin/plugins/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('asset/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
<script>
    $(document).ready(function () {
      $('#tabel').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });

      if (window.location.pathname == "/bellecrown/admin/pemesanan") {
        $("#navPemesanan").addClass("active");
      }else if (window.location.pathname == "/bellecrown/admin/home" || window.location.pathname == "/bellecrown/admin/" ){
        $("#navHome").addClass("active");
      }else{
        $("#navData").addClass("active");
      }
    });
</script>

</body>
</html>