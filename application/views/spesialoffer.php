<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php $index = 1; foreach($banner as $g){ ?>
                <div class="carousel-item <?php if($index == 1){echo "active";} ?>">
                    <img class="w-100" src="<?= base_url().$g->images ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4"><?= $g->judul ?></h1>
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
<div class="container-fluid py-2">
    <div class="container pb-3">
        <div class="text-center mb-3 pb-3">
            <?= $banner->deskripsi ?>
        </div>
        <div class="row">
            <?php if($specialoffer){ foreach ($specialoffer as $card): ?>
                <div class="col-6 col-sm-6 col-md-6 my-2">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url($card->foto); ?>" alt="Card image cap" width="250px" height="120px">
                        <div class="carousel-item">
                            <button class="btn btn-primary btn-hover rounded">Click Me</button>
                            <div class="text-overlay">
                                <p><?= $card->name; ?></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $card->nama; ?></h5>
                            <p class="card-text text-justify"><?php
                                        $description = strip_tags($card->lite_deskripsi);
                                        if (strlen($description) > 120) {
                                            $description = substr($description, 0, 120) . '...';
                                        }
                                        echo $description;
                                        ?>
                            </p>
                            <p class="card-text">IDR <?= number_format($card->price, 0, ',', '.'); ?></p>
                            <div class="card-footer">
                                <a class="btn btn-sm btn-primary float-right" href="<?= base_url('specialoffer/'.$card->id) ?>">Check Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; } else { ?>
                <h4>Data Special Offer Empty</h4>
            <?php } ?>
            <!-- <div class="col-lg-12 col-md-12 mb-4">
                <div class="text-center">
                    <a class="btn btn-md btn-primary" href="#">Read More</a>
                </div>
            </div>             -->
        </div>
    </div>
</div>