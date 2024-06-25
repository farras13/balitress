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
        <div class="alert alert-<?= $this->session->flashdata('message_type') ?> alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('message') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Tour & Package</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart($linkform); ?>

                <div class="form-group">
                    <label for="name">Package Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo set_value('name', isset($tour_package['name']) ? $tour_package['name'] : ''); ?>" required> 
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" value="<?php echo set_value('price', isset($tour_package['price']) ? $tour_package['price'] : ''); ?>" required>
                </div>

                <!-- <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" name="stock" value="<?php echo set_value('stock', isset($tour_package['stock']) ? $tour_package['stock'] : ''); ?>" required>
                </div>
                 -->
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea class="form-control summernote" name="about" required><?php echo set_value('about', isset($tour_package['about']) ? $tour_package['about'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="lite_desc">Lite Description</label>
                    <textarea class="form-control summernote" name="lite_desc" required><?php echo set_value('lite_desc', isset($tour_package['lite_desc']) ? $tour_package['lite_desc'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="full_desc">Full Description</label>
                    <textarea class="form-control summernote" name="full_desc" required><?php echo set_value('full_desc', isset($tour_package['full_desc']) ? $tour_package['full_desc'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="highlight">Highlight</label>
                    <textarea class="form-control summernote" name="highlight" required><?php echo set_value('highlight', isset($tour_package['highlight']) ? $tour_package['highlight'] : ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="info">Additional Info</label>
                    <textarea class="form-control summernote" name="info"><?php echo set_value('info', isset($tour_package['info']) ? $tour_package['info'] : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="popular" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Is Popular ?</label>
                    </div>
                </div>
                

                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" id="imageInput">
                    <img id="previewImage" style="max-width: 200px; margin-top: 10px; display: none;">
                </div>

                

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('tour_package'); ?>" class="btn btn-secondary">Cancel</a>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

   
</div>




