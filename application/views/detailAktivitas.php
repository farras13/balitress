<!-- Carousel Start -->
<style>
    .selected {
        background-color: #d4edda !important; /* Warna hijau */
    }
    .flex-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    @media (max-width: 576px) {
        .flex-container {
            flex-direction: column;
            align-items: stretch;
        }

        .flex-container .btn {
            margin-top: 10px;
        }
    }
</style>
<!-- Carousel End -->
<div class="container mt-5">
<div class="container p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php $index = 1; foreach($gallery as $g){ ?>
            <div class="carousel-item <?php if($index == 1){echo "active";} ?>">
                <img class="w-100" src="<?= base_url().$g->image ?>" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <!-- <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-md-4">Balinese Watukaru Yoga Retreat</h1>
                    </div> -->
                </div>
            </div>
            <?php $index++; } ?>
            <!-- <div class="carousel-item">
                <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                    </div>
                </div>
            </div> -->
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
        <div class="row mt-3">
            <!-- Bali Trees -->
            <div class="col-md-12 col-lg-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center text-primary my-3"><span class="text-dark"><?= $retreat->name ?></span> <?= $retreat->endname ?></h1>
                        <div class="card-text">
                            <p><?= $retreat->description ?></p>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <h2><b>Highlight</b></h2>
                                    <?= $retreat->highlights ?>
                                </div>
                                <div class="col-md-4">
                                    <h2><b>Facilities</b></h2>
                                    <?= $retreat->facilities ?>
                                </div>
                                <div class="col-md-12 mt-2">
                                <h2><b>Choose Your Room</b></h2>
                                <div class="package-item bg-white mb-2">
                                    <!-- <img class="img-fluid" src="<?= base_url('assets/') ?>img/room-1.jpg" alt="Kamar 1"> -->
                                    <div class="p-4">
                                        <!-- <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-bed text-primary mr-2"></i>Double Bed</small>
                                            <small class="m-0"><i class="fa fa-wifi text-primary mr-2"></i>Free Wi-Fi</small>
                                            <small class="m-0"><i class="fa fa-shower text-primary mr-2"></i>En-suite Bathroom</small>
                                        </div> -->
                                        <a class="h5 text-decoration-none" href="#">Bali Tress</a>
                                        <p class="mb-3">Deskripsi Bali Tress</p>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="flex-container">
                                                <h5 class="m-0">Rp 1.500.000/night</h5>
                                                <button class="btn btn-primary select-room">Select Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-item bg-white mb-2">
                                    <!-- <img class="img-fluid" src="<?= base_url('assets/') ?>img/room-2.jpg" alt="Kamar 2"> -->
                                    <div class="p-4">
                                        <!-- <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-bed text-primary mr-2"></i>Single Bed</small>
                                            <small class="m-0"><i class="fa fa-wifi text-primary mr-2"></i>Free Wi-Fi</small>
                                            <small class="m-0"><i class="fa fa-shower text-primary mr-2"></i>Shared Bathroom</small>
                                        </div> -->
                                        <a class="h5 text-decoration-none" href="#">Balocloves</a>
                                        <p class="mb-3">Deskripsi Balocloves</p>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="flex-container">
                                                <h5 class="m-0">Rp.1.000.000/night</h5>
                                                <button class="btn btn-primary select-room">Select Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>   
                                
                            </div>      
                            <center><a class="btn btn-primary">Add to cart</a></center>                          
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-md-4">
            <div class="position-relative">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Reservation Summary</h5>
                        <div class="container">
                            <div class="row pt-3">
                                <!-- <div class="col-xs-1">
                                    <a class="btn btn-link text-danger px-3" href="#">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <h6>Balitress Villa</h6>
                                    <small>Deluxe</small>
                                    <small>1 room</small>
                                </div>
                                <div class="col">
                                    <p class="text-right">
                                        <strong>$350</strong><br>
                                        <small>Qty : 1</small>
                                    </p>
                                </div> -->
                                <div class="col">
                                    <p>No one choosed</p>
                                </div>
                            </div>
                            <!-- <div class="row pt-3">
                                <div class="col-xs-1">
                                    <a class="btn btn-link text-danger px-3" href="#">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <small>3 Days 2 nights Yoga, Meditation & Cultural Retreat in Bali</small>
                                    <h6>Deluxe Double | Twin Bedroom</h6>
                                </div>
                                <div class="col">
                                    <p class="text-right">
                                        <strong>IDR 2,900,000</strong><br>
                                        <small>Stay for 2 Nights<br>From Sat, 18 May 2024<br>to Mon, 20 May 2024</small>
                                    </p>
                                </div>
                            </div> -->
                            <table class="mt-3 mb-3" width="100%">
                                <tbody>
                                    <tr>
                                        <td><h5>Total</h5></td>
                                        <td class="text-right"><h5><strong>Rp. 0</strong></h5></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <a href="<?= base_url("payment") ?>" class="btn btn-primary btn-block mb-3">Proceed to Payment</a> -->
                            <a href="" class="btn btn-primary btn-block mb-3">Proceed to Payment</a>
                        </div>
                    </div>
                    <div class="alert mt-3">
                        <i class="material-icons">info</i> You can add multiple rooms with different period of stay
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <center><h3>Other <span class="text-primary">Activities</span></h3></center>
            </div>
            <?php $indx = 1; foreach($others as $other){ if($indx < 4){ ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="<?= base_url().$other->image ?>" class="card-img-top" alt="Bali Trees Thumbnail">
                    <div class="card-body">
                        <h5 class="card-title" data-toggle="collapse" data-target="#baliTrees<?=$indx?>"><?= $other->name ?></h5>
                        <div id="baliTrees<?=$indx?>" class="collapse">
                            <div class="card-text">
                                <h6>Facilities:</h6>
                                <p><?= $other->facilities ?></p>
                                <h6>Highlight:</h6>
                                <p><?= $other->highlights ?></p>
                                <center><a class="btn btn-primary">Add to cart</a></center>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $indx++; }} ?>
            
        </div>    
         
    </div>