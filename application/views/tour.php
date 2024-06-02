<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tour Package</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tour Package</h4>
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
                    <a class="btn btn-primary btn-block" href="<?= base_url("home/search") ?>" >Search</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking End -->
<div class="container-fluid py-2">
    <div class="container pb-3">
        <!-- <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Special Offer </h6>
            <h1>Special Offer </h1>
        </div> -->
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>BALITRESS BUCKET LIST</h4>
                <hr />
            </div>
            
            
            <!-- <div class="col-lg-12 col-md-12 mb-4">
                <div class="text-center">
                    <a class="btn btn-md btn-primary" href="#">Read More</a>
                </div>
            </div>             -->
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <div id="tour-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php for($y=1;$y<4;$y++) { ?>
                            <div class="carousel-item <?php if($y == 1) echo 'active'; ?>">
                                <div class="package-item bg-white mb-2">
                                    <a href="<?= base_url("tour/detail") ?>" style="text-decoration: none;">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="<?= base_url('assets/') ?>img/package-2.jpg" alt="Contoh Gambar" class="img-fluid">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="my-4 py-5">
                                                        <h4 class="card-title">Judul<?= $y ?> Card</h4>
                                                        <p class="card-text text-dark">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor perferendis officiis veniam ratione, animi eius pariatur optio culpa consequatur doloribus ullam repellat ipsam, repudiandae sequi, minus in nihil placeat sed!</p>
                                                    </div>
                                                </div>
                                            </div>                           
                                        </div>
                                    </div> 
                                    </a>           
                                </div>
                            </div>                   
                        <?php } ?>
                    </div>
                    <a class="carousel-control-prev" href="#tour-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#tour-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>MOST POPULAR</h4>
                <hr />
            </div>
            <div class="col-md-12">
                <div class="owl-carousel testimonial-carousel">
                    <?php for($y=0;$y<5;$y++) { ?>
                    <div class="post-slide">
                        <div class="post-img">
                                <img src="<?= base_url('assets/') ?>img/package-3.jpg" alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                        <div class="testimonial-text bg-white p-4 mt-n5">
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">Bali Trees</a>
                                </h3>
                                <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                <span class="post-date"><i class="fa fa-clock-o"></i> Oct 27, 2019</span>
                                <!-- <a href="#" class="float-lg-right btn btn-sm btn-primary rounded">Explore</a> -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>