
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">KIKU</span>BALI</h1>
                </a>
                <!-- <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p> -->
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a href="<?= base_url() ?>" class="text-white-50 mb-2 <?php if($this->uri->segment('1') == "") echo "active";?>">Home</a>
                    <a href="<?= base_url('villa') ?>" class="text-white-50 mb-2 <?php if($this->uri->segment('1') == "villa") echo "active";?>">Villa & Suites </a>
                    <a href="<?= base_url('activities') ?>" class="text-white-50 mb-2 <?php if($this->uri->segment('1') == "activities") echo "active";?>">Activities</a>
                    <a href="<?= base_url('tour') ?>" class="text-white-50 mb-2 <?php if($this->uri->segment('1') == "tour") echo "active";?>">Tour Packages</a>
                    <a href="<?= base_url('specialoffer') ?>" class="text-white-50 mb-2 <?php if($this->uri->segment('1') == "specialoffer") echo "active";?>">Special Offer</a>
                    <a href="<?= base_url('contact') ?>" class="text-white-50 mb-2">Contact</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <!-- <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Bali, Indonesia</p> -->
                <p><i class="fa fa-phone-alt mr-2"></i>+62 822-6650-9516</p>
                <!-- <p><i class="fa fa-envelope mr-2"></i>info@Balitress.com</p> -->
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">KIKUBALI</a>. All Rights Reserved.</a>
                </p>
            </div>
            <!-- <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div> -->
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url('assets/') ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Include Moment.js -->
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- Include Daterangepicker.js -->
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="<?= base_url('assets/') ?>mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= base_url('assets/') ?>mail/contact.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.js"></script>
   
    <!-- Template Javascript -->
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
    <script>
        $(function() {
            $('#daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                autoUpdateInput: false
            });

            $('#daterange').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('D MMMM Y') + ' - ' + picker.endDate.format('D MMMM Y'));
                $("#checkin").val(picker.startDate.format('YYYY-MM-DD'));
                $("#checkout").val(picker.endDate.format('YYYY-MM-DD'));
            });

            $('#daterange').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>
   
</body>

</html>