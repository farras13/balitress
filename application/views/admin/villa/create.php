<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Villa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Villa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>    

    <?php if ($this->session->flashdata('message')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '<?= $this->session->flashdata('message'); ?>'
        });
    </script>
    <?php endif; ?>
    <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Villa</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart($linkform); ?>

                <div class="form-group">
                    <label for="name">Villa Name</label>
                    <input type="text" class="form-control" name="villa_name" value="<?php echo set_value('name', isset($villa->name) ? $villa->name : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="name">Villa Price</label>
                    <input type="number" class="form-control" name="villa_price" value="<?php echo set_value('price', isset($villa->price) ? $villa->price : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="view_description">View</label>
                    <textarea class="form-control summernote" name="view_description"><?php echo set_value('view_description', isset($villa->pemandangan) ? $villa->pemandangan : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" value="<?= set_value('location', isset($villa->lokasi) ? $villa->lokasi : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="lite_desc">Lite Description</label>
                    <textarea class="form-control summernote" name="villa_desk_lite"><?php echo set_value('villa_desk_lite', isset($villa->lite_deskripsi) ? $villa->lite_deskripsi : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="lite_desc">Description</label>
                    <textarea class="form-control summernote" name="villa_desk"><?php echo set_value('villa_desk', isset($villa->deskripsi) ? $villa->deskripsi : ''); ?></textarea>
                </div>
                

                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="image" id="imageInput">
                    <?= form_error('image', '<div class="text-danger">', '</div>'); ?>
                    <?php if(isset($villa->image)): ?>
                        <img src="<?php echo base_url($villa->image); ?>" alt="Current Thumbnail" style="max-width: 200px; margin-top: 10px;" id="currentImage">
                    <?php endif; ?>
                    <img id="previewImage" style="max-width: 200px; margin-top: 10px; display: none;">
                </div>
                
                <div class="form-group">
                    <label for="facility_ids">Facilities</label><br>
                    <?php foreach ($facilities as $facility): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="facility_ids[]" value="<?= $facility['id']; ?>" <?= isset($room['facilities']) ? set_checkbox('facility_ids[]', $facility['id'], in_array($facility['id'], array_column($room['facilities'], 'facility_id'))) : '' ; ?>>
                            <label class="form-check-label"><?= $facility['facility_name']; ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
                

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('villa'); ?>" class="btn btn-secondary">Cancel</a>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

   
</div>




