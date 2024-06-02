<div class="content-wrapper">

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Retreat Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Name:</strong>
                                <p><?php echo $retreat->name; ?></p>
                            </div>
                            <div class="col-md-6">
                                <strong>Description:</strong>
                                <p><?php echo $retreat->description; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Highlights:</strong>
                                <p><?php echo $retreat->highlights; ?></p>
                            </div>
                            <div class="col-md-6">
                                <strong>Facilities:</strong>
                                <p><?php echo $retreat->facilities; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Image:</strong>
                                <br>
                                <img src="<?php echo base_url('uploads/' . $retreat->image); ?>" width="200" height="200">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="<?php echo site_url('retreats'); ?>" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
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
<!-- /.content -->
</div>
