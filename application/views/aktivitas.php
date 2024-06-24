<!-- Carousel Start -->
<style>
    .card-custom {
        margin-bottom: 30px;
    }
    .card-img-custom {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
    .card-body-custom {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .card-img-container {
        height: 300px;
        overflow: hidden;
    }
</style>
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Our Retreats</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Our Retreats</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->

<!-- Booking Start -->
<div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-10">
                    <div class="row">
                    <div class="col-md-3">
                        <div class="mb-6 mb-md-0">
                            <!-- <div class="date" id="date1" data-target-input="nearest">
                                <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Check In" data-target="#date1" data-toggle="datetimepicker"/>
                            </div> -->
                            <label for="daterange">Check In - Check Out</label>
                                <input type="date" name="checkin" id="checkin" hidden>
                                <input type="date" name="checkout" id="checkout" hidden>
                                <input type="text" id="daterange" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-6 mb-md-0">
                            <label for="adult">Adult</label>
                            <select class="custom-select" name="adult" id="adult">
                                    <?php for ($i=1; $i < 16; $i++) { ?>
                                        <option value="<?= $i ?>" <?php if($i==1) "Selected"; ?>><?= $i ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-6 mb-md-0">
                            <label for="adult">Children</label>
                            <select class="custom-select" name="children" id="children">
                                    <option selected disabled>-</option>
                                    <?php for ($i=1; $i < 16; $i++) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-6 mb-md-0">
                            <label for="adult">Code Promo</label>
                            <input type="text" name="promocode" id="promocode" class="form-control p-2" placeholder="Enter promo code...">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary btn-block" href="<?= base_url("home/search") ?>" style="height: 47px;">Search</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->
<div class="container-fluid py-2">
    <div class="container mt-5">
        <div class="row">
        <?php foreach ($cards as $index => $retreat): ?>
            <?php if ($index % 2 == 0): ?>
                <!-- Card dengan gambar di sebelah kanan -->
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $retreat->name; ?></h5>
                                    <p class="card-text"><?= $retreat->description; ?></p>
                                    <a href="<?= base_url("activities/detail/.$retreat->retreat_id") ?>" class="btn btn-primary"> <i class="fa fa-arrow-circle-right"></i> View Retreat</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?= base_url($retreat->image); ?>" class="card-img-custom" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <!-- Card dengan gambar di sebelah kiri -->
                <div class="col-md-12 card-custom">
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url($retreat->image); ?>" class="card-img-custom" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $retreat->name; ?></h5>
                                    <p class="card-text"><?= $retreat->description; ?></p>
                                    <a href="<?= base_url("activities/detail/.$retreat->retreat_id") ?>" class="btn btn-primary"> <i class="fa fa-arrow-circle-right"></i> View Retreat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
       
        <?= $pagination1; ?>
           
        </div>
    </div>
    <div class="container pb-3">
        <!-- <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Special Offer </h6>
            <h1>Special Offer </h1>
        </div> -->
        <div class="row">
       
        </div>
        <h3 class="text-primary"> Daily Activity </h3>
        <div class="row mb-4">
            <?php foreach ($another_cards as $card){ if($card->retreat_tipe == "Activities"){  {  ?>
                <div class="col-md-4">
                    <div class="card package-card">
                    <img src="<?= base_url(''.$card->image_bg) ?>" class="card-img-top" alt="<?= $card->name ?>" width="250px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $card->name ?></h5>
                        <p class="card-text text-justify">
                            <?php  
                                $descriptions = strip_tags($card->lite_description);
                                if (strlen($descriptions) > 120) {
                                    $descriptions = substr($descriptions, 0, 120) . '...';
                                }
                                echo $descriptions;
                            ?>    
                        </p>
                        <center><a href="<?= base_url('activities/detail/'.$card->retreat_id) ?>" class="btn btn-primary text-center">Check Detail</a></center>
                    </div>
                    </div>
                </div>
            <?php }}} ?> 
        </div>
        <?= $pagination2; ?>
    </div>
</div>