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
                        <h1 class="card-title text-center text-primary my-3"><?= $specialoffer->nama ?></h1>
                        <div class="card-text">
                            <h2>About This Special Offer</h2>
                            <p><?= $specialoffer->lite_deskripsi ?></p>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <h3><b>Highlight</b></h3>
                                    <?= $specialoffer->highlight ?>
                                </div>
                                <div class="col-md-12">
                                    <h3><b>Full Description</b></h3>
                                    <?= $specialoffer->deskripsi ?>
                                </div>
                                <div class="col-md-12">
                                    <h3><b>Important Information</b></h3>
                                    <?= $specialoffer->important ?>
                                </div>
                                <div class="col-md-12 mt-2">
                                
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
                                    
                                    <div class="col">
                                        <p>No one choosed</p>
                                    </div>
                                </div>
                                
                                    
                            </div> 
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