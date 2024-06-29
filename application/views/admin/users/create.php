<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url("admin/user") ?>">Users</a></li>
              <li class="breadcrumb-item active">Create</li>
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
                <h3 class="card-title">Add New Users</h3>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart($linkform); ?>

                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo set_value('name', isset($user->name) ? $user->name : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo set_value('last_name', isset($user->last_name) ? $user->last_name : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="name">Phone number</label>
                    <input type="number" class="form-control" name="phone_number" value="<?php echo set_value('last_name', isset($user->phone_number) ? $user->phone_number : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo set_value('last_name', isset($user->email) ? $user->email : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo set_value('last_name', isset($user->password) ? $user->password : ''); ?>">
                </div>
                <div class="form-group">
                    <label for="name">Born Date</label>
                    <input type="date" class="form-control" name="born_date" value="<?php echo set_value('last_name', isset($user->born_date) ? $user->born_date : ''); ?>">
                </div>

                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control" name="image" id="imageInput">
                    <?= form_error('image', '<div class="text-danger">', '</div>'); ?>
                    <?php if(isset($user->profile_picture)): ?>
                        <img src="<?php echo base_url($user->profile_picture); ?>" alt="Current Thumbnail" style="max-width: 200px; margin-top: 10px;" id="currentImage">
                    <?php endif; ?>
                    <img id="previewImage" style="max-width: 200px; margin-top: 10px; display: none;">
                </div>                

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo site_url('villa'); ?>" class="btn btn-secondary">Cancel</a>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

   
</div>




