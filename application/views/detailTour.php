<div class="container">

    <div class="container mt-4">
        <form action="<?= base_url("tour/cari") ?>" method="post">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" placeholder="Find place and things to do" class="form-control rounded mb-3">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</>
                </div>
            </div>
    
        </form>
        <h5>Balinese - Tours Package - <?= $package['Name']; ?></h5>
        <h2> <?= $package['Name']; ?> </h2>
        <div class="row mt-5">
            <div class="col-md-12">
                <center><img src="<?= base_url(''.$package['Thumbnail']) ?>" class="img-fluid" id="mainImage" alt="Main Image"></center>
            </div>
        </div>
        <div class="row mt-2">
            <?php foreach($gallery as $g): ?>
                <div class="col-md-3">
                    <center><img src="<?= base_url(''.$g->images) ?>" class="img-thumbnail thumb-image" data-target="#imageModal" data-toggle="modal" data-slide-to="<?php echo $i-1; ?>" alt="Image <?php echo $i; ?>"></center>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">        
        <div class="col-md-8">    
            <div class="bg-light p-5 rounded">
                <h2 class="mb-4">About This Activity</h2>
                <p class="lead"><?= $package['About'] ?></p>
                <div class="bg-blue shadow p-4">
                    <h6>Select Participants and Date </h6>
                    <form action="<?= base_url("home/search") ?>" method="get">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <select class="custom-select rounded-right" name="adult" id="adult">
                                                <option value="1" disabled selected>Guest</option>
                                                <?php for ($i=1; $i < 16; $i++) { ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" name="checkin" id="checkin" hidden>
                                            <input type="date" name="checkout" id="checkout" hidden>
                                            <input type="text" id="daterange" class="form-control rounded-right" placeholder="Check In - Check Out">
                                        </div>
                                        
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="col-md-12 mt-3 mt-md-0">
                                <button type="submit" class="btn btn-primary btn-block rounded" style="height: 47px;">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <h3 class="mt-4">Highlight:</h3>
                <div class="p-3">
                    <?= $package['Highlight'] ?>
                </div>
                <h3 class="mt-4">Include & Exclude :</h3>
                <ul class="list-unstyled mb-4">
                    <?php foreach($iexclude as $ie){ ?>
                        <?php if($ie->Tipe == "include"){ ?>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary mr-2"></i><?= $ie->Name ?></li>                      
                        <?php } ?>
                    <?php } ?>
                    <?php foreach($iexclude as $ie){ ?>
                        <?php if($ie->Tipe != "include"){ ?>
                            <li class="mb-2"><i class="fa fa-times-circle text-danger mr-2"></i><?= $ie->Name ?></li>
                        <?php } ?>                           
                    <?php } ?>
                </ul>
                
                <h3 class="mt-4">Full Description:</h3>
                <p class="mb-4"><?= $package['Full_desc'] ?></p>

                <h3 class="mt-4">Important Information:</h3>
                <p class="mb-4">
                    <?= $package['Info'] ?>
                </p>
            </div>
        </div>
        
        <div class="col-md-4">            

            <div class="position-relative">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <small><b> per Person </b></small>
                                </div>
                                <div class="col-md-12">
                                    <h6>IDR <?= number_format($package['Price'], 0, ',', '.'); ?></h6>
                                </div>
                                <div class="col-md-12">
                                    <small><b> per Person </b></small>
                                </div>       
                            </div>
                            <div class="col-md-6">
                                <a href="<?= base_url("payment") ?>" class="btn btn-primary btn-sm btn-block rounded mb-3">Check Availablity</a>
                            </div>                         
                        </div>  
                        <div class="alert">
                            <small><i class="fa fa-calendar"></i> <b> Reserve now & pay later</b> to book your spot and pay nothing today.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-12">
            <div class="text-center"><h3>Other <span class="text-primary">Tour</span></h3></div>
        </div>
            <?php if($cards){ foreach ($cards as $card): ?>
                <div class="col-6 col-sm-6 col-md-3 my-2">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url($card['Thumbnail']); ?>" alt="Card image cap" width="250px" height="120px">
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
</div>