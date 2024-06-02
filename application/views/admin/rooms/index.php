
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rooms</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rooms</li>
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
                <h3 class="card-title pt-2">DataTable with default features</h3>
                <a href="<?php echo site_url('rooms/create'); ?>" class="float-right btn btn-primary">Create New Room</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Room Name</th>
                    <th>Room Type</th>
                    <th>Size</th>
                    <th>View</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($rooms as $room): ?>
                        <tr>
                            <td><?php echo $room['room_name']; ?></td>
                            <td><?php echo $room['type_name']; ?></td>
                            <td><?php echo $room['size']; ?></td>
                            <td><?php echo $room['view_description']; ?></td>
                            <td><?php echo $room['location']; ?></td>
                            <td><?php echo $room['description']; ?></td>
                            <td>
                                <a href="<?php echo site_url('rooms/edit/' . $room['id']); ?>">Edit</a>
                                <a href="#" onclick="confirmDelete(<?php echo $room['id']; ?>)">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th>Room Name</th>
                    <th>Room Type</th>
                    <th>Size</th>
                    <th>View</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
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

