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
                        <?= form_open_multipart('retreats/update/'.$retreat->retreat_id ); ?>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="<?= set_value('name', isset($retreat->name) ? $retreat->name : ''); ?>">
                                <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                <select name="retreat_tipe" id="retreat_tipe" class="form-control" required>
                                    <option value="" <?php if($retreat->retreat_tipe == ""){ echo "checked"; } ?>>Choose Your Type</option>
                                    <option value="Activities" <?php if($retreat->retreat_tipe == "Activities"){ echo "checked"; } ?>>Activities</option>
                                    <option value="Retreat" <?php if($retreat->retreat_tipe == "Retreat"){ echo "checked"; } ?>>Retreat</option>
                                </select>
                                <?= form_error('retreat_tipe', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Lite Description</label>
                                <textarea name="lite_description" class="form-control summernote"><?= set_value('lite_description', isset($retreat->lite_description) ? $retreat->lite_description : ''); ?></textarea>
                                <?= form_error('lite_description', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control summernote"><?= set_value('description', isset($retreat->description) ? $retreat->description : ''); ?></textarea>
                                <?= form_error('description', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Highlights</label>
                                <textarea name="highlights" class="form-control summernote"><?= set_value('highlights', isset($retreat->name) ? $retreat->name : ''); ?></textarea>
                                <?= form_error('highlights', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Facilities</label>
                                <textarea name="facilities" class="form-control summernote"><?= set_value('facilities', isset($retreat->name) ? $retreat->name : ''); ?></textarea>
                                <?= form_error('facilities', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" name="popular" class="custom-control-input" id="customSwitch1" <?php if($retreat->is_home == "on") { echo "checked"; } ?>>
                                    <label class="custom-control-label" for="customSwitch1">is highlight ?</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control-file">
                                <?= form_error('image', '<div class="text-danger">', '</div>'); ?>
                                <?php if(isset($retreat->image)): ?>
                                    <img src="<?= base_url($retreat->image); ?>" alt="Current image" style="max-width: 200px; margin-top: 10px;">
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        <?= form_close(); ?>
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
