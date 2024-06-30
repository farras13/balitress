<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Retreats</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Retreats</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="card-title">Retreats</h3>
                            <a href="<?php echo site_url('retreats/villa_add/'.$id); ?>" class="float-right btn btn-primary">Create Villa</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="retreats_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>                                        
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through retreats data -->
                                    <?php foreach ($retreats as $retreat): ?>
                                        <tr>
                                            <td><?php echo $retreat->villa_name; ?> + <?php echo $retreat->room_name; ?></td>
                                            <td><?php echo $retreat->harga; ?></td>
                                            <td>
                                                <!-- <a href="<?php echo site_url('retreats/edit/' . $retreat->id_rv); ?>" class="btn btn-primary btn-sm"><i class="fa fa-pen"></i></a> -->
                                                <a href="<?php echo site_url('retreats/villa_del/' . $retreat->id_rv); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this retreat?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
<!-- /.content -->
</div>

<!-- Load template footer -->
<?php $this->load->view('admin/footer'); ?>

<!-- DataTables -->
<script>    
    $(document).ready(function() {
        // Initialize DataTable
        $('#retreats_table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": [
                { extend: 'copy', exportOptions: { columns: ':not(:last-child)' } },
                { extend: 'csv', exportOptions: { columns: ':not(:last-child)' } },
                { extend: 'excel', exportOptions: { columns: ':not(:last-child)' } },
                { extend: 'pdf', exportOptions: { columns: ':not(:last-child)' } },
                { extend: 'print', exportOptions: { columns: ':not(:last-child)' } },
                { extend: 'colvis', columns: ':not(:last-child)' }
            ]
        }).buttons().container().appendTo('#retreats_table_wrapper .col-md-6:eq(0)');
    });
</script>