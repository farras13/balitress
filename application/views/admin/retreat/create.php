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
                        <form action="<?= base_url('retreats/insertdata') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                <select name="retreat_tipe" id="retreat_tipe" class="form-control" required>
                                    <option value="">Choose Your Type</option>
                                    <option value="Activities">Activities</option>
                                    <option value="Retreat">Retreat</option>
                                </select>
                                <?= form_error('retreat_tipe', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Lite Description</label>
                                <textarea name="lite_description" class="form-control summernote"><?= set_value('lite_description'); ?></textarea>
                                <?= form_error('lite_description', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control summernote"><?= set_value('description'); ?></textarea>
                                <?= form_error('description', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Highlights</label>
                                <textarea name="highlights" class="form-control summernote"><?= set_value('highlights'); ?></textarea>
                                <?= form_error('highlights', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Facilities</label>
                                <textarea name="facilities" class="form-control summernote"><?= set_value('facilities'); ?></textarea>
                                <?= form_error('facilities', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="popular" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">is highlight ?</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control-file">
                                <?= form_error('image', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url("retreats/insertdata") ?>" class="btn btn-primary">asdasdasd</a>
                        </form>
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
