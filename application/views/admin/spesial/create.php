<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Special Offer</h1>
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
                <h3 class="card-title">Add Special Offer</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart($linkform); ?>

                <div class="form-group">
                    <label for="name">Villa Name</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama', isset($spesial->nama) ? $spesial->nama : ''); ?>">
                </div>
                
                

                <div class="form-group">
                    <label for="lite_desc">Description</label>
                    <textarea class="form-control summernote" name="deskripsi"><?php echo set_value('deskripsi', isset($spesial->deskripsi) ? $spesial->deskripsi : ''); ?></textarea>
                </div>
                

                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="image">
                    <?php if(isset($spesial->foto)): ?>
                        <img src="<?php echo base_url($spesial->foto); ?>" alt="Current Thumbnail" style="max-width: 200px; margin-top: 10px;">
                    <?php endif; ?>
                </div>

                

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('admin/specialoffer'); ?>" class="btn btn-secondary">Cancel</a>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

   
</div>




