<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/template/')?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/template/')?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/template/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/template/')?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets/template/')?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/template/')?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/template/')?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/template/')?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/template/')?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/template/')?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets/template/')?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/template/')?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/template/')?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/template/')?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/template/')?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/template/')?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/template/')?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/template/')?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/template/')?>dist/js/demo.js"></script>
<!-- jszip -->
<script src="<?php echo base_url('assets/template/')?>additional/jszip/jszip.min.js"></script>
<!-- pdfmake -->
<script src="<?php echo base_url('assets/template/')?>additional/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/template/')?>additional/pdfmake/build/vfs_fonts.js"></script>
<!-- Buttons -->
<script src="<?php echo base_url('assets/template/')?>additional/buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/template/')?>additional/buttons/js/buttons.html5.min.js"></script>
<!-- Delete Modal -->
<script type="text/javascript">
  function deleteConfirm(url){ // Modal Delete
	  $('#btn-delete').attr('href', url);
	  $('#deleteModal').modal();
  }
  $(function() { // Date Picker Edit
    $('#datepicker').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      todayHighlight: true,
      orientation: "left auto",
      todayBtn: true,
      todayHighlight: true,
    });
  });
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
  });
</script>
