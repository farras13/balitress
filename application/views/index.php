<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Yoga Bali Retreat by Balitress</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                        <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
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


<!-- About Start -->
<div class="container-fluid">
    <div class="container pt-3 pb-3" style="max-height: 100%;">
        <div class="text-center mb-3 pb-3">
            <h1 class="mb-2 text-primary"><span class="text-dark">Welcome to </span>Balitress</h1>
            <p>Check out our introduction video:</p>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card package-card" >
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KLuTLF3x9sA" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="<?= base_url('assets/') ?>img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                    <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                    <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="<?= base_url('assets/') ?>img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-money-check-alt text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Competitive Pricing</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-award text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Best Services</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-globe text-white"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Worldwide Coverage</h5>
                        <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Activities Start -->
<div class="container-fluid py-5">
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
                            <h1 class="text-white"><span class="text-primary">Retreat and Activities  </span>Balinese</h1>
                        </div>
                        <p class="text-white">Join our retreat for an authentic and traditional Balinese yoga and meditation experience in the spiritual village near Mount Batukaru. Get close and involve yourself into daily cultural activities of the Sesandan Village community. At Balitress Retreats, you'll be welcomed into a family and village setting. Becoming part of both the family and the village community</p>
                        <a href="#" class="btn btn-primary rounded shadow"> <i class="fa fa-globe"></i> Find out more </a>
                    </div>
                    <div class="col-lg-5">
                        <div id="retreat-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">

                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">

                                </div>
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
            <?php for($x=0;$x<3;$x++) {?>
            <div class="col-md-4 mb-4">
                <div class="card package-card">
                <img src="<?= base_url('assets/') ?>img/package-4.jpg" class="card-img-top" alt="Package 1">
                <div class="card-body">
                    <h5 class="card-title">Learn Balinese Music & Dance</h5>
                    <p class="card-text">
                        This Activity is perfect for you who wants to experience the true beauty of Balinese Culture, learn new skills, and have fun.
                    </p>
                    <a href="#" class="btn btn-primary">Explore</a>
                </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Destination Start -->

<!-- Packages Start -->

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">VILLA & SUITES</h6>
            <h1>Our Villa & Suites</h1>
            <blockquote class="blockquote blockquote-custom text-dark mx-4" style="font-size: 1rem !important;">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate. In at asperiores voluptas voluptates, natus quia recusandae enim quos laboriosam quae vero quis delectus aperiam praesentium dolorem rem omnis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate. In at asperiores voluptas voluptates, natus quia recusandae enim quos laboriosam quae vero quis delectus aperiam praesentium dolorem rem omnis.</p>
                <footer class="blockquote-footer">Nelson Mandela</footer>
            </blockquote>
        </div>
        <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel villa-carousel">
                    <?php for($y=0;$y<5;$y++) { ?>
                            <div class="post-slide package-item bg-white mb-2">
                                <img class="img-fluid" src="<?= base_url('assets/') ?>img/package-2.jpg" alt="">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Nusa Lembongan</small>
                                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>1 days</small>
                                        <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Person</small>
                                    </div>
                                    <a class="h5 text-decoration-none" href="<?= base_url('Home/villa') ?>">Snorkeling and Mangrove Forest Day Tour</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                            <h5 class="m-0">$350</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Packages End -->

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tour package</h6>
            <h1>OurTour package</h1>
            <blockquote class="blockquote blockquote-custom text-dark mx-4" style="font-size: 1rem !important;">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate. In at asperiores voluptas voluptates, natus quia recusandae enim quos laboriosam quae vero quis delectus aperiam praesentium dolorem rem omnis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, voluptate. In at asperiores voluptas voluptates, natus quia recusandae enim quos laboriosam quae vero quis delectus aperiam praesentium dolorem rem omnis.</p>
                <footer class="blockquote-footer">Nelson Mandela</footer>
            </blockquote>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
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
</div>



<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Special Offer </h6>
            <h1>Special Offer </h1>
        </div>
        <div class="row">
            <?php for($y=0;$y<3;$y++) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-slide">
                        <div class="post-img">
                                <img src="<?= base_url('assets/') ?>img/package-5.jpg" alt="">
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
                </div>
            <?php } ?>
            <div class="col-lg-12 col-md-12 mb-4">
                <div class="text-center">
                    <a class="btn btn-md btn-primary" href="#">Read More</a>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Registration Start -->
<!-- <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                    <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                </div>
                <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h1 class="text-white m-0">Sign Up Now</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" placeholder="Your name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control p-4" placeholder="Your email" required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select px-4" style="height: 47px;">
                                    <option selected>Select a destination</option>
                                    <option value="1">destination 1</option>
                                    <option value="2">destination 1</option>
                                    <option value="3">destination 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Registration End -->

<!-- Team Start -->

<!-- Team End -->

<!-- Testimonial Start -->
<!-- <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="text-center pb-4">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/') ?>img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/') ?>img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/') ?>img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/') ?>img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->

<!-- Blog Start -->
<!-- <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/blog-1.jpg" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">01</h6>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                        </div>
                        <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/blog-2.jpg" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">01</h6>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                        </div>
                        <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="blog-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?= base_url('assets/') ?>img/blog-3.jpg" alt="">
                        <div class="blog-date">
                            <h6 class="font-weight-bold mb-n1">01</h6>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-white p-4">
                        <div class="d-flex mb-2">
                            <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                        </div>
                        <a class="h5 m-0 text-decoration-none" href="">Dolor justo sea kasd lorem clita justo diam amet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Blog End -->
