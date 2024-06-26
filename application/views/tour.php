<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="carouselBanner">
            <?php $index = 1; foreach($banner as $b){ ?>
            <div class="carousel-item <?php if($index == 1){ echo "active"; } ?>">
                <img class="w-100" src="<?= base_url().$b->images ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"><?php   
                        $descriptions = strip_tags($b->deskripsi);
                        if (strlen($descriptions) > 120) {
                            $descriptions = substr($deskripsi, 0, 120) . '...';
                        }
                        echo $descriptions;
                    ?></h4>
                        <h1 class="display-3 text-white mb-md-4"><?= $b->judul ?></h1>
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
            <form action="<?= base_url("home/search") ?>" method="post">
                <div class="input-group">
                    <input type="text" name="cari" placeholder="Find place and things to do" class="form-control rounded">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </form> 
           </div>
       </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>MOST POPULAR</h4>
                <hr />
            </div>
        </div>        
        <div class="row">
            <?php $i=1; foreach ($cards as $package){ if($package['is_popular'] == "on"){ $i++; if($i<5){  ?>
                <div class="col-md-4  mb-4">
                    <div class="card package-card">
                    <img src="<?= base_url(''.$package['Thumbnail']) ?>" class="card-img-top" alt="<?= $package['Name'] ?>" width="250px" height="180px">
                    <div class="card-body">
                        <h5 class="card-title"><?= $package['Name'] ?></h5>
                        <p class="card-text text-justify">
                            <?php  
                                $descriptions = strip_tags($package['Lite_desc']);
                                if (strlen($descriptions) > 120) {
                                    $descriptions = substr($descriptions, 0, 120) . '...';
                                }
                                echo $descriptions;
                            ?>    
                        </p>
                        <p class="card-text">IDR <?= number_format($package['Price'], 0, ',', '.'); ?></p>
                        <center><a href="<?= base_url('tour/detail/'.$package['Id']) ?>" class="btn btn-primary text-center">Check Detail</a></center>
                    </div>
                    </div>
                </div>
            <?php }}} ?>                 
        </div>
        
        
        <div class="container mt-4">
            <div class="col-md-12">
                <h4>Bali Tours</h4>
                <hr />
                <p>Discover Bali, Your Journey To Paradise Begins Here</p>
            </div>
            <div id="card-container" class="row">

            <?php if($cards){ foreach ($cards as $card): ?>
                <div class="col-6 col-sm-6 col-md-3 my-2">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url($card['Thumbnail']); ?>" alt="Card image cap" width="250px" height="120px">
                        <div class="carousel-item">
                            <button class="btn btn-primary btn-hover rounded">Click Me</button>
                            <div class="text-overlay">
                                <p class="text-overlay-content"><?= $card['Name']; ?></p>
                            </div>
                        </div>
                        <div class="card-body custom-text">
                            <h5 class="card-title"><?= $card['Name']; ?></h5>
                            <p class="card-text text-justify">
                                <?php
                                    $description = strip_tags($card['Lite_desc']);
                                    if (strlen($description) > 120) {
                                        $description = substr($description, 0, 120) . '...';
                                    }
                                    echo $description;
                                ?>
                            </p>
                            <p class="card-text">IDR <?= number_format($card['Price'], 0, ',', '.'); ?></p>
                            <div class="card-footer">
                                <a class="btn btn-sm btn-primary" href="<?= base_url('tour/detail/'.$card['Id']) ?>">Check Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; } else { ?>
                <h4>Data Tour and Package Kosong</h4>
            <?php } ?>

            <style>
                @media (max-width: 768px) {
                    .custom-text, .custom-text .card-title, .custom-text .card-text {
                        font-size: 0.8rem;
                    }
                    .text-overlay .text-overlay-content {
                        font-size: 0.8rem;
                    }
                }
            </style>


            </div>
            <?= $pagination; ?>
        </div>
    </div>
</div>