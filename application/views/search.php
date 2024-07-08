
<div class="container mt-5">
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
                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Search</button>
                </div>
            </div>
        </div>
    </div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#single-room">Activity</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#double-room">Tour</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#suite-room">Villa & Suites</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="single-room" class="container tab-pane active"><br>
                <h3>Activity</h3>
                <div class="row">
                    <?php foreach($aktivitas as $a) { ?>
                    <div class="post-slide package-item bg-white mb-2">
                        <div class="row">
                            <div class="col-md-6">
                            <img class="img-fluid" src="<?= base_url().$a->image ?>" alt="">

                            </div>
                            <div class="col-md-6">
                                <div class="p-4">
                                    <h5 class="text-primary"><?= $a->retreat_tipe ?></h5>
                                    <a class="h5 text-decoration-none" href="<?= base_url('Home/tour') ?>"><?= $a->name ?></a>
                                    
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <?= $a->description ?>
                                        </div>
                                        <div class="float-right">
                                            <a href="<?= base_url("activities/detail/").$a->retreat_id  ?>" class="btn btn-primary"> See Detail </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <?php } ?>
                    <!-- <div class="col-lg-12 col-md-12 mb-4">
                        <div class="text-center">
                            <a class="btn btn-md btn-primary" href="#">Read More</a>
                        </div>
                    </div>             -->
                </div>
            </div>
            <div id="suite-room" class="container tab-pane fade"><br>
                <h3>Villa & Suite</h3>
                <div class="row">
                <?php foreach($villa as $v) { ?>
                <div class="post-slide package-item bg-white mb-2">
                    <div class="row">
                        <div class="col-md-6">
                        <img class="img-fluid" src="<?= base_url('').$v->image ?>" alt="">

                        </div>
                        <div class="col-md-6">
                            <div class="p-4">
                                <h5 class="text-primary">Villa & Suite</h5>
                                <a class="h5 text-decoration-none" href="<?= base_url("villa/detail/").$v->id ?>"><?= $v->name ?></a>
                                
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <?= $v->lite_deskripsi ?>
                                    </div>
                                    <div class="float-right">
                                        <a href="<?= base_url("villa/detail/").$v->id ?>" class="btn btn-primary"> See Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            <?php } ?>
            <!-- <div class="col-lg-12 col-md-12 mb-4">
                <div class="text-center">
                    <a class="btn btn-md btn-primary" href="#">Read More</a>
                </div>
            </div>             -->
        </div>
            </div>
            <div id="double-room" class="container tab-pane fade"><br>
                <h3>Tour Package</h3>
                <div class="row">
                <?php foreach($tour as $t) { ?>
                    <div class="post-slide package-item bg-white mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid" src="<?= base_url().$t->Thumbnail ?>" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="p-4">
                                    <h5 class="text-primary">Tour Package</h5>
                                    <a class="h5 text-decoration-none" href="<?= base_url('tour/detail/'.$t->Id) ?>"><?= $t->Name ?></a>                                
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <?= $t->Lite_desc ?>
                                        </div>                                       
                                    </div>
                                    <div class="float-right p-2">
                                        <a href="<?= base_url('tour/detail/'.$t->Id) ?>" class="btn btn-primary"> See Detail </a>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                <?php } ?>
                <!-- <div class="col-lg-12 col-md-12 mb-4">
                    <div class="text-center">
                        <a class="btn btn-md btn-primary" href="#">Read More</a>
                    </div>
                </div>             -->
                </div>
            </div>
           
        </div>
    </div>
