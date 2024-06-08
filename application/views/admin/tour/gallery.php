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
                <h3 class="card-title">Tour Package Gallery</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('tourpackage/upload_image'); ?>
                
                <div class="form-group">
                    <label for="tour_id">Tour Package</label>
                    <select class="form-control" name="tour_id">
                            <option value="<?php echo $package['Id']; ?>" <?php if($package['Id'] == $id){ echo "selected"; } ?>><?php echo $package['Name']; ?></option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
                <?php echo form_close(); ?>
                
                <h3 class="mt-5">Gallery</h3>
                <div class="row">
                    <?php foreach ($gallery as $image): ?>
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img src="<?php echo base_url($image['images']); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="<?php echo site_url('tourpackage/delete_image/'.$image['Id']); ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


   
</div>




