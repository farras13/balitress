<!-- Carousel Start -->
<style>
    .selected {
        background-color: #d4edda !important; /* Warna hijau */
    }
</style>
<!-- Carousel End -->
<div class="container mt-5">
    <div class="container p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Villa Balitress</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= base_url('assets/') ?>img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
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
    <div class="row">
        <!-- Bali Trees -->
        <div class="col-md-12 col-lg-8 mb-4">
            <div class="card">
                <div class="card-body">
                <h1 class="card-title text-center text-primary my-3"><span class="text-dark">Balitress</span> Villa</h1>
                    <div class="card-text">
                        <p>Join our retreat for an authentic and traditional Balinese yoga and meditation experience in the spiritual village near Mount Batukaru. Get close and involve yourself into daily cultural activities of the Sesandan Village community. At Balitress Retreats, you'll be welcomed into a family and village setting. Becoming part of both the family and the village community.</p>
                        <div class="row my-3">
                            <div class="col-md-6">                                    
                                <p><strong>Room Type:</strong> King</p>
                                <p><strong>Room Facilities:</strong></p>
                                <ul>
                                    <li>Air-conditioned room</li>
                                    <li>Free Wifi</li>
                                    <li>Hair Dryer</li>
                                    <li>TV</li>
                                    <li>Coffee / Tea</li>
                                    <li>Towels</li>
                                    <li>Desk</li>
                                    <li>Toiletries</li>
                                    <li>Refrigerator</li>
                                    <li>Private Bathroom</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h2>Pemandangan</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis nunc ac sem consequat tempus.</p>
                                <h2>Lokasi</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis nunc ac sem consequat tempus.</p>
                            </div>
                        </div>  
                        <div class="col-md-12">
                                <h6><b>Choose Your Room</b></h6>
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="<?= base_url('assets/') ?>img/room-1.jpg" alt="Kamar 1">
                                    <div class="p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-bed text-primary mr-2"></i>Double Bed</small>
                                            <small class="m-0"><i class="fa fa-wifi text-primary mr-2"></i>Free Wi-Fi</small>
                                            <small class="m-0"><i class="fa fa-shower text-primary mr-2"></i>En-suite Bathroom</small>
                                        </div>
                                        <a class="h5 text-decoration-none" href="#">Deluxe Room with Sea View</a>
                                        <p class="mb-3">Nikmati pemandangan laut yang menakjubkan dari kamar deluxe ini.</p>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="m-0">$150 per night</h5>
                                                <button class="btn btn-primary select-room">Select Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="<?= base_url('assets/') ?>img/room-2.jpg" alt="Kamar 2">
                                    <div class="p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-bed text-primary mr-2"></i>Single Bed</small>
                                            <small class="m-0"><i class="fa fa-wifi text-primary mr-2"></i>Free Wi-Fi</small>
                                            <small class="m-0"><i class="fa fa-shower text-primary mr-2"></i>Shared Bathroom</small>
                                        </div>
                                        <a class="h5 text-decoration-none" href="#">Standard Room</a>
                                        <p class="mb-3">Kamar standar dengan semua fasilitas dasar yang diperlukan.</p>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="m-0">$100 per night</h5>
                                                <button class="btn btn-primary select-room">Select Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-item bg-white mb-2">
                                    <img class="img-fluid" src="<?= base_url('assets/') ?>img/room-3.jpg" alt="Kamar 3">
                                    <div class="p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-bed text-primary mr-2"></i>Queen Bed</small>
                                            <small class="m-0"><i class="fa fa-wifi text-primary mr-2"></i>Free Wi-Fi</small>
                                            <small class="m-0"><i class="fa fa-shower text-primary mr-2"></i>Private Bathroom</small>
                                        </div>
                                        <a class="h5 text-decoration-none" href="#">Superior Room with Garden View</a>
                                        <p class="mb-3">Kamar superior dengan pemandangan taman yang indah.</p>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="m-0">$120 per night</h5>
                                                <button class="btn btn-primary select-room">Select Room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        <center><a class="btn btn-primary mt-3">Add to cart</a></center>                          
                    </div>
                </div>
            </div>
        </div>  
        <div class="col-md-12 col-lg-4 my-3">
        <div class="position-relative">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Reservation Summary</h5>
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col-xs-1">
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
                                    <td class="text-right"><h5><strong>$350</strong></h5></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?= base_url("payment") ?>" class="btn btn-primary btn-block mb-3">Proceed to Payment</a>
                    </div>
                </div>
                <div class="alert mt-3">
                    <i class="material-icons">info</i> You can add multiple rooms with different period of stay
                </div>
            </div>
        </div>
        
        </div>            
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center"><hr><h3>Other Villa</h3><hr></div>
        </div>
        <div class="col-md-12">
            <div  class="owl-carousel news-slider">
                <div class="post-slide">
                <div class="post-img">
                    <img src="https://via.placeholder.com/150" alt="">
                    <a href="<?= base_url('villa') ?>" class="over-layer"><i class="fa fa-link"></i></a>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                    <a href="#">Bali Trees</a>
                    </h3>
                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                    <a href="<?= base_url('villa') ?>" class="read-more">Explore</a>
                </div>
                </div>       
            
                <div class="post-slide">
                <div class="post-img">
                    <img src="https://via.placeholder.com/150" alt="">
                    <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                    <a href="#">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                    <a href="<?= base_url('villa') ?>" class="read-more">Explore</a>
                </div>
                </div>
                
                <div class="post-slide">
                <div class="post-img">
                    <img src="https://via.placeholder.com/150" alt="">
                    <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                    <a href="#">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                    <a href="<?= base_url('villa') ?>" class="read-more">Explore</a>
                </div>
                </div>
            </div>
        </div>
    </div>   
</div>