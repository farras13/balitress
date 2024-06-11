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
               <h2> <?= $package['Name']; ?> </h2>        
            </div>
            <div class="card-body">
              <div class="row mt-5">
                <div class="col-md-12">
                  <center><img src="<?= base_url(''.$package['Thumbnail']) ?>" class="img-fluid" id="mainImage" alt="Main Image"></center>
                </div>
              </div>
              <div class="row mt-2">
                <?php foreach($gallery as $g): ?>
                    <div class="col-md-3">
                        <center><img src="<?= base_url(''.$g->images) ?>" class="img-thumbnail thumb-image" data-target="#imageModal" data-toggle="modal" data-slide-to="<?php echo $i-1; ?>" alt="Image <?php echo $i; ?>"></center>
                    </div>
                <?php endforeach; ?>
              </div>              
              <div class="container mt-3">
                  <div class="row">        
                      <div class="col-md-8">    
                          <div class="bg-light p-5 rounded">
                              <h2 class="mb-4">About This Activity</h2>
                              <p class="lead"><?= $package['About'] ?></p>                
                              <h3 class="mt-4">Highlight:</h3>
                              <div class="p-3">
                                  <?= $package['Highlight'] ?>
                              </div>
                              <h3 class="mt-4">Include & Exclude :</h3>
                              <ul class="list-unstyled mb-4">
                                  <?php foreach($iexclude as $ie){ ?>
                                      <?php if($ie->Tipe == "include"){ ?>
                                          <li class="mb-2"><i class="fa fa-check-circle text-primary mr-2"></i><?= $ie->Name ?></li>
                                      <?php }else{ ?>
                                          <li class="mb-2"><i class="fa fa-times-circle text-danger mr-2"></i><?= $ie->Name ?></li>
                                      <?php } ?>
                                  <?php } ?>
                              </ul>
                              
                              <h3 class="mt-4">Full Description:</h3>
                              <p class="mb-4"><?= $package['Full_desc'] ?></p>

                              <h3 class="mt-4">Important Information:</h3>
                              <p class="mb-4">
                                  <?= $package['Info'] ?>
                              </p>
                          </div>
                      </div>
                      
                      <div class="col-md-4">           

                          <div class="position-relative">
                              <div class="card mb-4">
                                  <div class="card-body">
                                      <div class="row pt-3">
                                          <div class="col-md-6">
                                              <div class="col-md-12">
                                                  <small><b> per Person </b></small>
                                              </div>
                                              <div class="col-md-12">
                                                  <h6>IDR <?= number_format($package['Price'], 0, ',', '.'); ?></h6>
                                              </div>
                                              <div class="col-md-12">
                                                  <small><b> per Person </b></small>
                                              </div>       
                                          </div>
                                          <div class="col-md-6">
                                              <a href="<?= base_url("payment") ?>" class="btn btn-primary btn-sm btn-block rounded mb-3">Check Availablity</a>
                                          </div>                         
                                      </div>  
                                      <div class="alert">
                                          <small><i class="fa fa-calendar"></i> <b> Reserve now & pay later</b> to book your spot and pay nothing today.</small>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>   
            </div>
        </div>
        <a href="<?php echo site_url('tour_package'); ?>" class="btn btn-secondary mt-3">Back</a>
        </div>
    </section>
</div>




