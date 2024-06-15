
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>villa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">villa</li>
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
                <a href="<?= site_url('admin/villa/create'); ?>" class="float-right btn btn-primary">Create New Villa</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($rooms as $room): ?>
                        <tr>
                            <td><?= $room->name; ?></td>
                            <td><?= $room->description ?></td>
                            <td><img src="<?= base_url().$room->image ?>" alt="<?= $room->name ?>" width="250px" height="150px"></td>
                            <td>
                                <a href="<?= site_url('admin/villa/edit/' . $room->id); ?>" class="btn btn-sm btn-warning my-1" ><i class="fa fa-pen"></i></a>
                                <a href="<?= site_url('admin/villa/gallery/' . $room->id); ?>" class="btn btn-sm btn-success my-1" ><i class="fa fa-image"></i></a>
                                <a href="<?= site_url('admin/villa/delete/'.$room->id); ?>" class="btn btn-sm btn-danger my-1" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>

                                <!-- <a href="#" onclick="confirmDelete(<?= $room->id; ?>)">Delete</a> -->
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

