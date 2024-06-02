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
                    <h3 class="card-title">Add Tour & Package  </h3>
                </div>
                <div class="card-body">
                <?php echo form_open($linkform); ?>

                <div class="form-group">
                    <label for="package_name">Package Name</label>
                    <input type="text" class="form-control" name="package_name" value="<?php echo set_value('package_name', isset($tour_package['package_name']) ? $tour_package['package_name'] : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" value="<?php echo set_value('location', isset($tour_package['location']) ? $tour_package['location'] : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" value="<?php echo set_value('duration', isset($tour_package['duration']) ? $tour_package['duration'] : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="participants">Participants</label>
                    <input type="text" class="form-control" name="participants" value="<?php echo set_value('participants', isset($tour_package['participants']) ? $tour_package['participants'] : ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" value="<?php echo set_value('price', isset($tour_package['price']) ? $tour_package['price'] : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control summernote" name="description"><?php echo set_value('description', isset($tour_package['description']) ? $tour_package['description'] : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="included">Included</label>
                    <textarea class="form-control summernote" name="included"><?php echo set_value('included', isset($tour_package['included']) ? $tour_package['included'] : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="itinerary">Itinerary</label>
                    <textarea class="form-control summernote" name="itinerary"><?php echo set_value('itinerary', isset($tour_package['itinerary']) ? $tour_package['itinerary'] : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="additional_info">Additional Info</label>
                    <textarea class="form-control summernote" name="additional_info"><?php echo set_value('additional_info', isset($tour_package['additional_info']) ? $tour_package['additional_info'] : ''); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="cancellation_policy">Cancellation Policy</label>
                    <textarea class="form-control summernote" name="cancellation_policy"><?php echo set_value('cancellation_policy', isset($tour_package['cancellation_policy']) ? $tour_package['cancellation_policy'] : ''); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('tour_package'); ?>" class="btn btn-secondary">Cancel</a>

                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>




