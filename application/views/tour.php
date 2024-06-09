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

<div class="container-fluid py-2">
    <div class="container pb-3">
       <div class="row mb-4">
           <div class="col-md-12">
               <input type="text" placeholder="Find place and things to do" class="form-control rounded">
           </div>
       </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>MOST POPULAR</h4>
                <hr />
            </div>
        </div>        
        <div class="row">
            <?php for($x=0;$x<3;$x++) {?>
                <div class="col-md-4 mb-4">
                    <div class="card package-card">
                    <img src="<?= base_url('assets/') ?>img/package-4.jpg" class="card-img-top" alt="Package 1">
                    <div class="card-body">
                        <h5 class="card-title">Learn Balinese Music & Dance</h5>
                        <p class="card-text text-center">
                            This Activity is perfect for you who wants to experience the true beauty of Balinese Culture, learn new skills, and have fun.
                        </p>
                        <center><a href="#" class="btn btn-primary text-center">View Retreat</a></center>
                    </div>
                    </div>
                </div>
            <?php } ?>                 
        </div>
        
        
        <div class="container mt-4">
            <div class="col-md-12">
                <h4>Bali Tours</h4>
                <hr />
                <p>Discover Bali, Your Journey To Paradise Begins Here</p>
            </div>
            <div id="card-container" class="row">

                <?php if($cards){ foreach ($cards as $card): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?= base_url($card['Thumbnail']); ?>" alt="Card image cap">
                            <div class="carousel-item">
                                <button class="btn btn-primary btn-hover rounded">Click Me</button>
                                <div class="text-overlay">
                                    <p><?= $card['title']; ?></p>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $card['Name']; ?></h5>
                                <p class="card-text"><?php
                                            $description = $card['Lite_desc'];
                                            if (strlen($description) > 200) {
                                                $description = substr($description, 0, 200) . '...';
                                            }
                                            echo $description;
                                            ?>
                                </p>
                                <p class="card-text">IDR <?= number_format($card['Price'], 0, ',', '.'); ?></p>
                                <a class="btn btn-sm float-right btn-primary" href="<?= base_url('tour/detail/'.$card['Id']) ?>">Check Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; } else { ?>
                    <h4>Data Tour and Package Kosong</h4>
                <?php } ?>
            </div>
            <?= $pagination; ?>
        </div>
    </div>
</div>