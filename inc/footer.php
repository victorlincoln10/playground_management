
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
      playground management
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; <?=date('Y')?> <a href="#">playground management</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
<script src="assets/js/main.js"></script>
  <!-- jQuery -->
  <script src="lib/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="lib/datatables/jquery.dataTables.min.js"></script>
<script src="lib/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="lib/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="lib/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });

  $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  $(function () {
    $("#example3").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });

    </script>
</body>

</html>