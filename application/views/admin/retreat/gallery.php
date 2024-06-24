<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Retreat Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Retreat</li>
              <li class="breadcrumb-item active">Gallery</li>
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
                <h3 class="card-title">Retreat Gallery</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('retreats/upload_gallery/'.$id); ?>
                
                 <input hidden name="retreat_id" value="<?= $id; ?>">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="imageInput">
                    <img id="previewImage" style="max-width: 200px; margin-top: 10px; display: none;">
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
                <?php echo form_close(); ?>
                
                <h3 class="mt-5">Gallery</h3>
                <div class="row">
                    <?php foreach ($gallery as $image): ?>
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img src="<?php echo base_url($image->image); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="<?php echo site_url('retreats/delete_image/'.$image->id); ?>" class="btn btn-danger">Delete</a>
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




