<div class="content-wrapper">
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Retreat</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Form untuk create retreat -->
<?php echo form_open_multipart('retreats/create'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
        <?php echo form_error('name', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control summernote"><?php echo set_value('description'); ?></textarea>
        <?php echo form_error('description', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Highlights</label>
        <textarea name="highlights" class="form-control summernote"><?php echo set_value('highlights'); ?></textarea>
        <?php echo form_error('highlights', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Facilities</label>
        <textarea name="facilities" class="form-control summernote"><?php echo set_value('facilities'); ?></textarea>
        <?php echo form_error('facilities', '<div class="text-danger">', '</div>'); ?>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control-file">
        <?php echo form_error('image', '<div class="text-danger">', '</div>'); ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>

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
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Retreat Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Name:</strong>
                                <p><?php echo $retreat->name; ?></p>
                            </div>
                            <div class="col-md-6">
                                <strong>Description:</strong>
                                <p><?php echo $retreat->description; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Highlights:</strong>
                                <p><?php echo $retreat->highlights; ?></p>
                            </div>
                            <div class="col-md-6">
                                <strong>Facilities:</strong>
                                <p><?php echo $retreat->facilities; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Image:</strong>
                                <br>
                                <img src="<?php echo base_url('uploads/' . $retreat->image); ?>" width="200" height="200">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="<?php echo site_url('retreats'); ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
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
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Retreats</h3>
                        <a href="<?php echo site_url('retreats/create'); ?>" class="float-right btn btn-primary">Create New Room</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="retreats_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Highlights</th>
                                    <th>Facilities</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through retreats data -->
                                <?php foreach ($retreats as $retreat): ?>
                                    <tr>
                                        <td><?php echo $retreat->name; ?></td>
                                        <td><?php echo $retreat->description; ?></td>
                                        <td><?php echo $retreat->highlights; ?></td>
                                        <td><?php echo $retreat->facilities; ?></td>
                                        <td><img src="<?php echo base_url('uploads/' . $retreat->image); ?>" width="100" height="100"></td>
                                        <td>
                                            <a href="<?php echo site_url('retreats/edit/' . $retreat->retreat_id); ?>" class="btn btn-primary">Edit</a>
                                            <a href="<?php echo site_url('retreats/delete/' . $retreat->retreat_id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this retreat?')">Delete</a>
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
    $(function () {
        // Summernote
        $('.summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
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