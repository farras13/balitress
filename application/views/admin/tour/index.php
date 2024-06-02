


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
                            <th>ID</th>
                            <th>Package Name</th>
                            <th>Location</th>
                            <th>Duration</th>
                            <th>Participants</th>
                            <th>Rating</th>
                            <th>Reviews</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tour_packages as $package): ?>
                        <tr>
                            <td><?php echo $package['id']; ?></td>
                            <td><?php echo $package['package_name']; ?></td>
                            <td><?php echo $package['location']; ?></td>
                            <td><?php echo $package['duration']; ?></td>
                            <td><?php echo $package['participants']; ?></td>
                            <td><?php echo $package['rating']; ?></td>
                            <td><?php echo $package['reviews_count']; ?></td>
                            <td><?php echo $package['price']; ?></td>
                            <td>
                                <a href="<?php echo site_url('tour_package/view/'.$package['id']); ?>" class="btn btn-sm btn-info">View</a>
                                <a href="<?php echo site_url('tour_package/edit/'.$package['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?php echo site_url('tour_package/delete/'.$package['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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

