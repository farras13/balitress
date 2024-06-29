
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
        <div class="row">
          <div class="col-12">            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title pt-2">DataTable with default features</h3>
                <a href="<?= site_url('admin/user/add'); ?>" class="float-right btn btn-primary">Create New Users</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->first_name; ?></td>
                            <td><?= $user->last_name; ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->phone_number ?></td>
                            <td>
                                <a href="<?= site_url('admin/user/edit/' . $user->id); ?>" class="btn btn-sm btn-warning my-1" ><i class="fa fa-pen"></i></a>
                                <a href="<?= site_url('admin/user/delete/'.$user->id); ?>" class="btn btn-sm btn-danger my-1" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
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

