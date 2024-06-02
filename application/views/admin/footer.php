<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url("assets/admin/") ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/admin/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/admin/") ?>js/adminlte.min.js"></script>
 <!-- SweetAlert -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!-- DataTables  & Plugins -->
<script src="<?= base_url("assets/admin/") ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url("assets/admin/") ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url("assets/admin/") ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/admin/") ?>js/demo.js"></script>
<script>
  $(function () {
      // Summernote
      $('.summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
      });
  })
  $(function () {
        // Summernote
        $('#facilities').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
  $(function () {
    // Tabel dengan tombol aksi
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [
            { extend: 'copy', exportOptions: { columns: ':not(:last-child)' } },
            { extend: 'csv', exportOptions: { columns: ':not(:last-child)' } },
            { extend: 'excel', exportOptions: { columns: ':not(:last-child)' } },
            { extend: 'pdf', exportOptions: { columns: ':not(:last-child)' } },
            { extend: 'print', exportOptions: { columns: ':not(:last-child)' } },
            { extend: 'colvis', columns: ':not(:last-child)' }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    // Tabel tanpa tombol aksi
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "columnDefs": [
            { targets: -1, visible: false } // Sembunyikan kolom terakhir (kolom "action")
        ]
    });
});
</script>
  <script>
      function confirmDelete(roomId) {
          Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.isConfirmed) {
                  window.location.href = '<?php echo site_url('rooms/delete/'); ?>' + roomId;
              }
          })
      }
  </script>
</body> 
</html>