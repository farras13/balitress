
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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

    <div class="container mt-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Banner</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Youtube Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tour package</a>
        </li>
       
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Banner Utama</h3>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('admin/banner_add'); ?>
                    
                    <div class="form-group">
                        <label for="Judul">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                    <?php echo form_close(); ?>
                    
                    <h3 class="mt-5">Banner</h3>
                    <div class="row">
                        <?php foreach ($banner as $image): ?>
                            <div class="col-md-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h3><?= $image->judul ?></h3>
                                    </div>
                                    <div class="card-body">
                                        <img src="<?php echo base_url($image->images); ?>" class="card-img-top" alt="...">
                                        <a href="<?php echo site_url('admin/delete_banner/'.$image->id); ?>" class="btn btn-danger mt-4">Delete</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Link Youtube</h3>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart($linkform); ?>
                    
                    <div class="form-group">
                        <label for="image">Link Youtube</label>
                        <input type="text" class="form-control" name="link" value="<?= isset($link->link) ? $link->link : "" ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                    <?php echo form_close(); ?>
                </div>
            </div>          
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tour Information</h3>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart("admin/banner_tour_info"); ?>
                        <div class="form-group">
                            <input type="text" value="tourinfo" name="menu" hidden>
                            <label>Judul</label>
                            <div class="input-group">
                                    <input type="text" class="form-control" name="judul" value="<?= $tourinfo->judul ?>">
                            </div>
                            <label>Deskripsi</label>
                            <div class="input-group">
                                    <textarea name="deskripsi" id="" class="form-control summernote"><?= $tourinfo->deskripsi ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>

                        </div>          
                    <?php echo form_close(); ?>
                </div>
                <div class="card-header">
                    <h3 class="card-title">Banner </h3>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('admin/banner_tour_add');  ?>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="image">Banner Besar</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="menu" value="tour1" hidden>
                                <input type="file" class="form-control" name="image">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url().$toursatu->images ?>" alt="" width="250px" height="120px">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                    
                    <div class="row">
                        <div class="col-md-8">
                        <?php echo form_open_multipart('admin/banner_tour_add'); ?>
                        <label for="image">Banner Kecil 1</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="menu" value="tour2" hidden>
                                <input type="file" class="form-control" name="image" >
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>

                        <?php echo form_close(); ?>  
                        </div>
                        <div class="col-md-4">
                        <img src="<?= base_url().$tourdua->images ?>" alt="" width="250px" height="120px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                        <?php echo form_open_multipart('admin/banner_tour_add'); ?>
                        <label for="image">Banner Kecil 2</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="menu" value="tour3" hidden>
                                <input type="file" class="form-control" name="image" >
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>

                        <?php echo form_close(); ?>  
                        </div>
                        <div class="col-md-4">
                        <img src="<?= base_url().$tourtiga->images ?>" alt="" width="250px" height="120px">
                        </div>
                    </div>

                
                    
                </div>
            </div>
        </div>
    </div>
</div>


   
   
    </div>

