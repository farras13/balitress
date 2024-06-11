<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tour & Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package</li>
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
                <h3 class="card-title">Edit Tour & Package</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart($linkform); ?>

                <?php if (isset($upload_error)) { ?>
                    <div class="alert alert-danger"><?php echo $upload_error; ?></div>
                <?php } ?>

                <div class="form-group">
                    <label for="name">Package Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo set_value('name', isset($tour_package['Name']) ? $tour_package['Name'] : ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" value="<?php echo set_value('price', isset($tour_package['Price']) ? $tour_package['Price'] : ''); ?>">
                </div>

                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control summernote" name="about"><?php echo set_value('about', isset($tour_package['About']) ? $tour_package['About'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="lite_desc">Lite Description</label>
                    <textarea class="form-control summernote" name="lite_desc"><?php echo set_value('lite_desc', isset($tour_package['Lite_desc']) ? $tour_package['Lite_desc'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="full_desc">Full Description</label>
                    <textarea class="form-control summernote" name="full_desc"><?php echo set_value('full_desc', isset($tour_package['Full_desc']) ? $tour_package['Full_desc'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="highlight">Highlight</label>
                    <textarea class="form-control summernote" name="highlight"><?php echo set_value('highlight', isset($tour_package['Highlight']) ? $tour_package['Highlight'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="info">Additional Info</label>
                    <textarea class="form-control summernote" name="info"><?php echo set_value('info', isset($tour_package['Info']) ? $tour_package['Info'] : ''); ?></textarea>
                </div>
                
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="popular" class="custom-control-input" id="customSwitch1" <?php if($tour_package['Is_Popular'] == 1) { echo "checked"; } ?>>
                        <label class="custom-control-label" for="customSwitch1">is tour popular?</label>
                    </div>
                    <!-- <div class="form-check form-switch">
                        <input class="form-check-input" name="popular" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Is Popular ?</label>
                    </div> -->
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">
                    <?php if(isset($tour_package['Thumbnail'])): ?>
                        <img src="<?php echo base_url($tour_package['Thumbnail']); ?>" alt="Current Thumbnail" style="max-width: 200px; margin-top: 10px;">
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('tour_package'); ?>" class="btn btn-secondary">Cancel</a>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

</div>




