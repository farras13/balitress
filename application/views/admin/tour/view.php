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
                <?php echo $tour_package['package_name']; ?>
            </div>
            <div class="card-body">
                <p><strong>Location:</strong> <?php echo $tour_package['location']; ?></p>
                <p><strong>Duration:</strong> <?php echo $tour_package['duration']; ?></p>
                <p><strong>Participants:</strong> <?php echo $tour_package['participants']; ?></p>
                <p><strong>Rating:</strong> <?php echo $tour_package['rating']; ?> (<?php echo $tour_package['reviews_count']; ?> reviews)</p>
                <p><strong>Price:</strong> $<?php echo $tour_package['price']; ?></p>
                <p><strong>Description:</strong> <?php echo nl2br($tour_package['description']); ?></p>
                <p><strong>Included:</strong> <?php echo nl2br($tour_package['included']); ?></p>
                <p><strong>Itinerary:</strong> <?php echo nl2br($tour_package['itinerary']); ?></p>
                <p><strong>Additional Info:</strong> <?php echo nl2br($tour_package['additional_info']); ?></p>
                <p><strong>Cancellation Policy:</strong> <?php echo nl2br($tour_package['cancellation_policy']); ?></p>
            </div>
        </div>
        <a href="<?php echo site_url('tour_package'); ?>" class="btn btn-secondary mt-3">Back</a>
        </div>
    </section>
</div>




