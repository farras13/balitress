<style>
    .card {
        position: relative;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: auto;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5); /* Overlay color */
        opacity: 0;
        transition: opacity 0.3s ease;
        color: white;
        padding: 1rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card:hover .overlay {
        opacity: 1; /* Show overlay on hover */
    }

    .overlay .card-title,
    .overlay .card-text {
        margin-bottom: 1rem;
    }

    .overlay a.btn {
        margin-top: auto; /* Push button to the bottom of overlay */
    }
</style>

<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Villa & Suites</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Villa & Suites</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div> -->
            <?php $index = 1; foreach($banner as $g){ ?>
                <div class="carousel-item <?php if($index == 1){echo "active";} ?>">
                    <img class="w-100" src="<?= base_url().$g->images ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4"><?= $g->judul ?></h1>
                        </div>
                    </div>
                </div>
            <?php $index++; } ?>
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
                    <a class="btn btn-primary btn-block" href="<?= base_url("home/search") ?>">Search</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mb-4">
            <div class="card package-card" >
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $link->link_villa ?>" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div>
    <h3>Accomodation</h3>
    <div class="row">
        <?php foreach ($villas as $card): ?>
        <div class="col-md-6 mb-4">
            <div class="card position-relative">
                <img src="<?= base_url() . $card->image ?>" class="card-img-top" alt="<?= $card->name ?>">
                <div class="overlay position-absolute w-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="p-3">
                            <h5 class="card-title text-white"><?= $card->name ?></h5>
                            <p class="card-text text-white"><?= $card->lite_deskripsi ?></p>
                        </div>
                        <div class="p-3 text-right">
                            <a href="<?= base_url('villa/detail/' . $card->id) ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
