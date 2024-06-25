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
    <div class="row popup-gallery">
        <div class="col-md-12">
            <a href="<?= base_url(''.$retreat->image) ?>" class="popup-link">
                <center><img src="<?= base_url(''.$retreat->image) ?>" class="img-fluid main-img" id="mainImage" alt="Main Image"></center>
            </a>
        </div>
        <div class="row gallery" id="gallery1">
            <?php foreach($gallery as $img): ?>
                <div class="col-md-3 mt-5">
                    <a href="<?= base_url().$img->image ?>" class="popup-link">
                        <img src="<?= base_url().$img->image ?>" alt="Image" class="img-thumbnail thumb-image">
                    </a>
                </div>
            <?php endforeach; ?>
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
                            <h2><b>Choose Your Package</b></h2>
                            <?php foreach($villa as $v){ ?>    
                                <div class="package-item bg-white mb-2">
                                    <div class="p-4">                                         
                                        <a class="h5 text-decoration-none" href="#"><?= $v->name ?></a>
                                        <p class="mb-3"><?= $v->lite_deskripsi ?></p>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="flex-container">
                                                <h5 class="m-0">Rp <?= number_format($v->price, 2, '.', ','); ?>/night</h5>
                                                <button class="btn btn-primary select-room">Select Package</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            
                        </div>   
                            
                        </div>      
                        <center><a class="btn btn-primary">Add to cart</a></center>                          
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-lg-4 col-md-4">
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