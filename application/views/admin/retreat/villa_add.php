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
            text: '<?= $this->session->flashdata('message'); ?>'
        });
    </script>
    <?php endif; ?>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Room</h3>
                </div>
                <div class="card-body">
                    <?= form_open('retreats/villa_create'); ?>
                    <div class="form-group">
                        <label for="room_type_id">Rooms</label>
                        <select class="form-control" name="room_type_id" required>
                            <?php foreach ($rooms as $type): ?>
                                <option value="<?= $type['id']; ?>"> <?= $type["villa_name"] ." - ". $type['room_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="size">Price</label>
                            <input type="number" class="form-control" name="price" value="<?= set_value('price'); ?>" required>
                            <input type="text" class="form-control" name="id" value="<?= $id ?>" hidden>
                        </div>                        
                    </div>                  
              
                    <button type="submit" class="btn btn-primary float-right ml-2">Create</button>
                    <button type="submit" class="btn btn-secondary float-right ml-2">Cancel</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
