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
              <li class="breadcrumb-item"><a href="#">Rooms</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>    
    <?php echo validation_errors(); ?>

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
                    <h3 class="card-title">Edit Room</h3>
                </div>
                <div class="card-body">
                    <?= form_open('rooms/edit/' . $room['id']); ?>
                    <div class="form-group">
                        <label for="room_name">Room Name</label>
                        <input type="text" class="form-control" name="room_name" value="<?=  set_value('room_name', $room['room_name']); ?>">
                    </div>

                    <div class="form-group">
                        <label for="room_type_id">Room Type</label>
                        <select class="form-control" name="room_type_id">
                        <?php foreach ($room_types as $type): ?>
                            <option value="<?php echo $type['id']; ?>" <?php echo set_select('room_type_id', $type['id'], $type['id'] == $room['room_type_id']); ?>>
                                <?php echo $type['type_name']; ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="size">Size</label>
                        <input type="text" class="form-control" name="size" value="<?= set_value('size', $room['size']); ?>">
                    </div>

                    <div class="form-group">
                        <label for="view_description">View</label>
                        <input type="text" class="form-control" name="view_description" value="<?= set_value('view_description', $room['view_description']); ?>">
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" value="<?= set_value('location', $room['location']); ?>">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="summernote" name="description">
                           <?= set_value('description', $room['description']); ?>
                        </textarea>
                        <!-- <textarea class="form-control" name="description"><?= set_value('description'); ?></textarea> -->
                    </div>                           

                    <div class="form-group">
                        <label for="facility_ids">Facilities</label><br>
                        <?php foreach ($facilities as $facility): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="facility_ids[]" value="<?= $facility['id']; ?>" <?= set_checkbox('facility_ids[]', $facility['id'], in_array($facility['id'], array_column($room['facilities'], 'facility_id'))); ?>>
                                <label class="form-check-label"><?= $facility['facility_name']; ?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="submit" class="btn btn-primary float-right ml-2">Create</button>
                    <button type="submit" class="btn btn-secondary float-right ml-2">Cancel</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

