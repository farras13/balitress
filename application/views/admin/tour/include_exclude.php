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
                <h3 class="card-title">Manage Includes & Excludes</h3>
            </div>
            <div class="card-body">
                <?php echo form_open(base_url()."tourpackage/include_exclude/add/$id"); ?>
                
                <div class="form-group">
                    <label for="tour_id">Tour Package</label>
                    <input type="text" name="tour_id" value="<?= $package['Id'] ?>" hidden>
                    <select class="form-control" disabled>
                            <option value="<?php echo $package['Id']; ?>" <?php if($package['Id'] == $id){ echo "selected"; } ?>><?php echo $package['Name']; ?></option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="include">Include</label>
                    <input type="text" class="form-control" name="include"><?php echo set_value('include'); ?></input>
                </div>

                <div class="form-group">
                    <label for="exclude">Exclude</label>
                    <input type="text" class="form-control" name="exclude"><?php echo set_value('exclude'); ?></i>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <?php echo form_close(); ?>

                <h3 class="mt-5">Includes & Excludes</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Includes</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tour Package</th>
                                    <th>Include</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($includes as $include): ?>
                                    <tr>
                                        <td><?php echo $include['tour_name']; ?></td>
                                        <td><?php echo $include['Name']; ?></td>
                                        <td>
                                            <a href="<?php echo site_url('tourpackage/delete_include/'.$include['Id']); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h4>Excludes</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tour Package</th>
                                    <th>Exclude</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($excludes as $exclude): ?>
                                    <tr>
                                        <td><?php echo $exclude['tour_name']; ?></td>
                                        <td><?php echo $exclude['Name']; ?></td>
                                        <td>
                                            <a href="<?php echo site_url('tourpackage/delete_exclude/'.$exclude['Id']); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
