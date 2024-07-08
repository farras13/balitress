<div class="container mt-5">
        <h2 class="mb-4">Payment</h2>

        <!-- Progress bar -->
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 50%" id="progress-bar">Step 1 of 2</div>
        </div>

        <form id="paymentForm">
        <!-- Step 1: Verifikasi Pesanan -->
        <div id="step1">
            <h4>Step 1: Order Verification</h4>
            <!-- Opsi Penjemputan -->
            <div class="row">
                <div class="col-md-12 my-3">
                    <label for=""><b>Choose your date</b></label>
                    <input type="date" name="checkin" id="checkin" required class="d-none">
                    <input type="date" name="checkout" id="checkout" required class="d-none">
					<?php $placeholderDefaultTommorow = date_add(date_create(), date_interval_create_from_date_string("1 day")) ?>
                    <input type="text" id="daterange" class="form-control rounded" value="<?= date("j F Y") . " - " . date_format($placeholderDefaultTommorow, 'j F Y')  ?>" required>
                </div> 

                <?php foreach($this->session->userdata('data-item') as $c){ ?>
                    <div class="col-md-12 mb-4">
                        <div class="card package-card">
                            <img src="<?= $c['thumbnail'] ?>" class="card-img-top" alt="<?= $c['nama'] ?>" width="100%" height="380px">
                            <div class="card-body">
                                <h5 class="card-title"><?= $c['nama'] ?></h5>
                                <p>Room : <br>
                                    <small><?= $c['nama'] ?> - <?= $c['rooms'] ?></small>
                                    <br> Qty : <?= $c['qty'] ?>                               
                                </p>
                                
                                <p class="card-text float-right">IDR <?= number_format($c['harga'], 0, ',', '.'); ?><br>Subtotal Price</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>                 
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="total-amount "><b>Total :  </b> Rp. <?=  number_format($this->session->userdata("data-totalPrice"), 0, ',', '.'); ?>
                    <button type="button" class="btn btn-primary" id="na">Next</button>
            </div>
                </div>
            </div>

        </div>

    <!-- Step 2: Pengisian Biodata -->
    <div id="step2" style="display:none;">
        <h4>Step 2: Fill in Biodata</h4>
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <button type="button" class="btn btn-secondary" id="backToStep1">Back</button>
        <button type="button" class="btn btn-primary" id="nextToStep3">Next</button>
    </div>

    <!-- Step 3: Pembayaran -->
    <div id="step3" style="display:none;">
        <h4>Step 3: Payment</h4>
        <div class="row">
            <?php  foreach($this->session->userdata('data-item') as $c){ ?>
                <div class="col-md-12 mb-4">
                    <div class="card package-card">
                        <input type="text" hidden name="room_id" id="room_id" value="<?= $c['room_id'] ?>">
                        <input type="text" hidden name="villa_id" id="villa_id" value="<?= $c['villa_id'] ?>">
                        <input type="text" hidden name="aktivitas_id" id="aktivitas_id" value="<?= $c['aktivitas_id'] ?>">
                        <input type="text" hidden name="qty" id="qty" value="<?= $c['qty'] ?>">
                        <input type="text" hidden name="harga" id="harga" value="<?= $c['harga'] ?>">
                        <img src="<?= $c['thumbnail'] ?>" class="card-img-top" alt="<?= $c['nama'] ?>" width="250px" height="180px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $c['nama'] ?></h5>
                            <p>Room : <br>
                                <small><?= $c['nama'] ?> - <?= $c['rooms'] ?></small>
                                <br> Qty : <?= $c['qty'] ?>
                            </p>
                            <input type="text" hidden id="pesananroom" value="<?= $c['nama'] .'-'. $c['rooms'] ?>">
                            <p class="card-text float-right">IDR <?= number_format($c['harga'], 0, ',', '.'); ?> </p>
                            <p>Sub Total Price</p>
                        </div>
                    </div>
                </div>
            <?php } ?>                 
        </div>
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="card">
                    <div class="card-title px-3 pt-4">
                        <h4>Your Info Details</h4>
                    </div>
                    <div class="card-body mb-3">
                        <div class="row mb-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-4"><b>Name:</b> </div>
                            <div class="col-md-7" id="nama_pembeli"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-4"><b>Email:</b> </div>
                            <div class="col-md-7" id="email_pembeli"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-4"><b>Phone:</b> </div>
                            <div class="col-md-7" id="phone_pembeli"></div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
        <div id="confirmation-details">
            <div class="card mt-4">
                <p><center>Total : <b>IDR <?= number_format($this->session->userdata('data-totalPrice'), 0, ',', '.'); ?></b></center>
                </p><button type="button" class="btn btn-success" id="submitPayment"> Send Inquiries</button>
                <button type="button" class="btn btn-secondary" id="backToStep2">Back</button>
            </div>
        </div>

        
    </div>
</form>

<!-- Script JavaScript -->
</div>

<script>
    // Ambil elemen form
    var paymentForm = document.getElementById('paymentForm');

    // Tambahkan event listener untuk navigasi antar langkah
    document.getElementById('na').addEventListener('click', function() {
       
        var checkin = document.getElementById('checkin').value.trim();
        var checkout = document.getElementById('checkout').value.trim();

        // Check if both date inputs are filled
        if (checkin === "" || checkout === "") {
            alert("Please select both check-in and check-out dates.");
        } else {
            document.getElementById('step1').style.display = 'none';
            document.getElementById('step2').style.display = 'block';
			$("#progress-bar").css("width", "66%").text("Step 2 of 3");
        }
       
    });

    document.getElementById('backToStep1').addEventListener('click', function() {
        document.getElementById('step2').style.display = 'none';
        document.getElementById('step1').style.display = 'block';
			$("#progress-bar").css("width", "33%").text("Step 1 of 3");
    });

    document.getElementById('nextToStep3').addEventListener('click', function() {
        if(validateFormPembeli(document.getElementById('name').value, document.getElementById('email').value, document.getElementById('phone').value)){
            document.getElementById('step2').style.display = 'none';
            document.getElementById('step3').style.display = 'block';
    
            document.getElementById('nama_pembeli').innerText = document.getElementById('name').value;
            document.getElementById('email_pembeli').innerText = document.getElementById('email').value;
            document.getElementById('phone_pembeli').innerText = document.getElementById('phone').value;
            $("#progress-bar").css("width", "100%").text("Step 3 of 3");
        }else{
            alert("Pleast complete the form");
        }
    });

    document.getElementById('backToStep2').addEventListener('click', function() {
        document.getElementById('step3').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
			$("#progress-bar").css("width", "66%").text("Step 2 of 3");
    });

    // Tambahkan event listener untuk submit form
    document.getElementById('submitPayment').addEventListener('click', function() {
        // Dapatkan nilai dari input nama, email, dan phone
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var checkin = document.getElementById('checkin').value;
        var checkout = document.getElementById('checkout').value;

        
        // Dapatkan detail pesanan
        var orderDetails = "";
        var items = document.querySelectorAll('.package-card');
        let datapemesanan = [];
        
        items.forEach(function(item) {
            var room_id = document.getElementById('room_id').value;
            var villa_id = document.getElementById('villa_id').value;
            var aktivitas_id = document.getElementById('aktivitas_id').value;
            var qty = document.getElementById('qty').value;
            var title = item.querySelector('.card-title').innerText;
            var price = item.querySelector('.card-text').innerText;
            var harga = <?= $c['harga'] ?>;
            var villa = document.getElementById('pesananroom').value;
            orderDetails += villa + " : " + price + "\n";
            datapemesanan.push({room_id, villa_id, aktivitas_id, title, villa, qty, harga, checkin, checkout})
        });

        // Dapatkan total pembayaran
        var totalAmount = <?= $this->session->userdata("data-totalPrice") ?>;
        // Data yang akan dikirimkan ke server
        var data = {
            name: name,
            email: email,
            phone: phone,
            orderDetails:datapemesanan,
            totalAmount: totalAmount
        };

        console.log(data);

        // Kirim data ke server menggunakan AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url("Payment/addTransaction") ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if (validateForm(name, email, phone, checkin, checkout)) {
                    // If valid, send WhatsApp message
                    localStorage.removeItem('cart');
                    sendWhatsApp(name, email, phone, orderDetails, totalAmount, checkin, checkout);
                } else {
                    // Prevent form submission if validation fails
                    event.preventDefault();
                }
                // Jika penyimpanan berhasil, lanjutkan dengan mengirim pesan WhatsApp
                
            } else {
                // Tampilkan pesan atau lakukan sesuatu jika ada masalah
            }
        };
        xhr.send(JSON.stringify(data));
    });
    function validateFormPembeli(name, email, phone) {
    // Name validation: not empty and contains only letters and spaces
    var nameRegex = /^[a-zA-Z\s]+$/;
    if (!name || !nameRegex.test(name)) {
        alert("Please enter a valid name.");
        return false;
    }

    // Email validation: basic regex for email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Phone validation: not empty and contains only digits
    var phoneRegex = /^[0-9]+$/;
    if (!phone || !phoneRegex.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    return true;
}
    function validateForm(name, email, phone, checkin, checkout) {
    // Name validation: not empty and contains only letters and spaces
    var nameRegex = /^[a-zA-Z\s]+$/;
    if (!name || !nameRegex.test(name)) {
        alert("Please enter a valid name.");
        return false;
    }

    // Email validation: basic regex for email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Phone validation: not empty and contains only digits
    var phoneRegex = /^[0-9]+$/;
    if (!phone || !phoneRegex.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    if (!checkin) {
        alert("Please enter a date checkin");
        return false;
    }

    if (!checkout) {
        alert("Please enter a date checkout.");
        return false;
    }

    return true;
}

    // Fungsi untuk mengirim pesan WhatsApp
    function sendWhatsApp(name, email, phone, orderDetails, totalAmount, checkin, checkout) {
        // Format pesan WhatsApp
        var message = encodeURIComponent("Customer Information:\n" + "Name: " + name + "\nEmail: " + email + "\Phone: " + phone + "\nCheck In:" + checkin + "\nCheck Out:" + checkout +"\n\nOrder Details:\n" + orderDetails + "\nTotal Payment:\n" + totalAmount);

        // Nomor WhatsApp tujuan
        var whatsappNumber = "6283866906123";

        // URL WhatsApp dengan nomor tujuan dan pesan
        var whatsappURL = "https://api.whatsapp.com/send?phone=" + whatsappNumber + "&text=" + message;

        // Buka WhatsApp dengan URL yang telah dibuat
        window.location.href = whatsappURL;
        // window.open(whatsappURL, '_blank');
    }
</script>

   