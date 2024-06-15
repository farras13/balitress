<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="carouselBanner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
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
<div class="container booking mt-2">
    <div class="container pb-5">
        <div class="bg-light shadow p-4">
            <form action="<?= base_url("home/search") ?>" method="get">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <input type="date" name="checkin" id="checkin" hidden>
                                <input type="date" name="checkout" id="checkout" hidden>
                                <input type="text" id="daterange" class="form-control rounded" placeholder="Check In - Check Out">
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <select class="custom-select rounded" name="adult" id="adult">
                                    <option value="1" disabled selected>Guest</option>
                                    <?php for ($i=1; $i < 16; $i++) { ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <input type="text" name="promocode" id="promocode" class="form-control rounded" placeholder="Promo Code">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mt-3 mt-md-0">
                        <button type="submit" class="btn btn-primary btn-block rounded" style="height: 47px;">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Booking End -->

<div class="container mb-5">
    <div class="container mb-3 pt-3 pb-3" style="max-height: 100%;">
        <div class="text-center mb-3 pb-3">
            <h1 class="mb-2 text-primary"><span class="text-dark">Special Offer</h1>
            <p class="text-primary">GET THE BEST DEAL</p>
        </div>
        <div class="row mx-auto my-auto">
            <div id="caroselspecialoffer" class="carousel caroselspecialoffer slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <?php $y=1; foreach($spesialoffer as $so){ ?>
                    <div class="carousel-item <?php if($y==1) echo 'active'; ?>">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="<?= base_url().$so->foto ?>">
                            <button class="btn btn-primary btn-hover rounded"><?= $so->nama ?></button>
                        </div>
                    </div>
                    <?php $y++; } ?>
                </div>
                <a class="carousel-control-prev bg-dark w-auto" href="#caroselspecialoffer" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-dark w-auto" href="#caroselspecialoffer" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container mt-3">
    <div class="container mt-3 pt-3 pb-3" style="max-height: 100%;">
        <div class="text-center mb-3 pb-3">
            <h1 class="mb-2 text-primary"><span class="text-dark">Welcome to </span>Balitress</h1>
            <p>Check out our introduction video:</p>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card package-card" >
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="<?= $link->link ?>" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Activities Start -->
<div class="container py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Retreat</h6>
            <h1>Retreat and Activities</h1>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4 bg-registration">
                <div class="row align-items-center py-5">
                    <div class="col-lg-7 mb-5 mb-lg-0 p-3 rounded" style="background-color:rgba(0, 0, 0, 0.2);">
                        <div class="mb-4">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"> Our Retreat</h6>
                            <h1 class="text-white"><span class="text-primary"><?= $retreat->name ?></h1>
                        </div>
                        <p class="text-white">
                        <?php   
                            $descriptions = strip_tags($retreat->description);
                            if (strlen($descriptions) > 120) {
                                $descriptions = substr($descriptions, 0, 120) . '...';
                            }
                            echo $descriptions;
                        ?>
                        </p>
                        <a href="<?= base_url("activities/detail/").$retreat->retreat_id ?>" class="btn btn-primary rounded shadow"> <i class="fa fa-globe"></i> Find out more </a>
                    </div>
                    <div class="col-lg-5">
                        <div id="retreat-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach($galretreat as $idx => $gal){ ?>
                                <div class="carousel-item <?php if($idx == 1){echo "active";} ?>">
                                    <img class="w-100" src="<?= base_url().$gal->image ?>" alt="Image">
                                </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#retreat-carousel" data-slide="prev">
                                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                    <span class="carousel-control-prev-icon mb-n2"></span>
                                </div>
                            </a>
                            <a class="carousel-control-next" href="#retreat-carousel" data-slide="next">
                                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                    <span class="carousel-control-next-icon mb-n2"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Daily Activity</h6>
            </div>
            <!-- Package 1 -->
            <?php foreach($retreats_daily as $retreats) {?>
            <div class="col-md-3 mb-4">
                <div class="card package-card">
                <img src="<?= base_url($retreats->image) ?>" class="card-img-top" alt="<?= $retreats->name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $retreats->name ?></h5>
                    <p class="card-text">
                        <?php   
                            $descriptions = strip_tags($retreats->description);
                            if (strlen($descriptions) > 120) {
                                $descriptions = substr($descriptions, 0, 120) . '...';
                            }
                            echo $descriptions;
                        ?>
                    </p>
                    <a href="<?= base_url("activities/detail/").$retreats->retreat_id ?>" class="btn btn-primary">Explore</a>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Destination Start -->

<!-- Villa -->
<div class="container">
    <div class="container pt-3 pb-3" style="max-height: 100%;">
        <div class="text-center mb-3 pb-3">
            <h5 class="text-primary">VILLA & SUITES</h5>
            <h1 class="mb-2 text-primary"><span class="text-dark">Our Villa & Suites</h1>
            <blockquote class="blockquote blockquote-custom text-dark mx-4" style="font-size: 1rem !important;">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate. In at asperiores voluptas voluptates, natus quia recusandae enim quos laboriosam quae vero quis delectus aperiam praesentium dolorem rem omnis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate. In at asperiores voluptas voluptates, natus quia recusandae enim quos laboriosam quae vero quis delectus aperiam praesentium dolorem rem omnis.</p>
                <footer class="blockquote-footer">Nelson Mandela</footer>
            </blockquote>
        </div>
        <div class="row mx-auto my-auto">
            <div id="caroselvilla" class="carousel caroselvilla slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    
                <?php foreach($villa as $v) { ?>
                    <div class="carousel-item <?php if($y==1) echo 'active'; ?>">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid" src="<?= $v->image ?>">
                            <a href="" class="btn btn-primary"><?= $v->name ?></a>
                        </div>
                    </div>
                <?php $y++; } ?>
                </div>
                <a class="carousel-control-prev rounded-0 w-auto" href="#caroselvilla" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon p-2 bg-dark rounded" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next rounded-0 w-auto" href="#caroselvilla" role="button" data-slide="next">
                    <span class="carousel-control-next-icon p-2 bg-dark rounded" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Tour Packages -->
<div class="container py-5">
    <div class="container pt-5">
        <div class="text-center mb-3 pb-3">
            <h1 style="letter-spacing: 5px;">Tour package</h1>            
        </div>
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?= base_url().$toursatu->images ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tour Package</h5>
                    <h1 class="mb-3"><?= $tourinfo->judul ?></h1>
                    <p><?= $tourinfo->deskripsi ?></p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url().$tourdua->images ?>" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url().$tourtiga->images ?>" alt="">
                        </div>
                    </div>
                    <a href="<?= base_url("tour") ?>" class="btn btn-primary mt-1">Explore</a>
                </div>
            </div>
        </div>
    </div>
</div> 