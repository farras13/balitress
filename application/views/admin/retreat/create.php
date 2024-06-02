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
</div>
