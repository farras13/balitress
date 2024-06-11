


<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tour Packages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tour</li>
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
            text: '<?php echo $this->session->flashdata('message'); ?>'
        });
    </script>
    <?php endif; ?>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title pt-2">Tour Packages</h3>
                <a href="<?php echo site_url('tour_package/create'); ?>" class="float-right btn btn-primary">Create New Room</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Package</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Thumbnail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tour_packages as $index => $package):   ?>
                        <tr>
                            <td><?= $index+1; ?></td>
                            <td><?= $package['Name']; ?></td>
                            <td><?= $package['Lite_desc']; ?></td>
                            <td><?= $package['Price']; ?></td>
                            <td><img src="<?= base_url() ?><?= $package['Thumbnail']; ?>" width="180px" height="120px"></td>                           
                            <td class="p-3">
                                <a href="<?= site_url("tourpackage/include_exclude/").$package['Id'] ?>" class="btn btn-sm btn-info my-1">I / E</a>
                                <a href="<?= site_url("tourpackage/gallery/").$package['Id'] ?>" class="btn btn-sm btn-primary my-1"><i class="fa fa-image"></i></a>
                                <a href="<?= site_url('tourpackage/view/'.$package['Id']); ?>" class="btn btn-sm btn-info my-1"><i class="fa fa-info"></i></a>
                                <a href="<?= site_url('tourpackage/edit/'.$package['Id']); ?>" class="btn btn-sm btn-warning my-1"><i class="fa fa-pen"></i></a>
                                <a href="<?= site_url('tourpackage/delete/'.$package['Id']); ?>" class="btn btn-sm btn-danger my-1" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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

