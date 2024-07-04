<div class="container mt-5">
        <h2 class="mb-4">Payment</h2>

        <!-- Progress bar -->
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 50%" id="progress-bar">Step 1 of 2</div>
        </div>

        <form id="paymentForm">
        <!-- Step 1: Verifikasi Pesanan -->
        <div id="step1">
            <h4>Step 1: Verifikasi Pesanan</h4>
            <!-- Opsi Penjemputan -->
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card package-card">
                        <img src="<?= base_url($pesan->Thumbnail) ?>" class="card-img-top" alt="<?= $pesan->Name ?>" width="100%" height="380px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pesan->Name ?></h5>
                            <p>Tanggal : <?= $tanggal ?> <br> Person : <?= $qty ?></p>
                            
                            <p class="card-text float-right">IDR <?= number_format($pesan->Price, 0, ',', '.'); ?><br>Subtotal Price</p>
                        </div>
                    </div>
                </div>
                            
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="total-amount "><b>Total :  </b> Rp. <?=  number_format($harga, 0, ',', '.'); ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block" id="na">Next</button>
            </div>

        </div>

    <!-- Step 2: Pengisian Biodata -->
    <div id="step2" style="display:none;">
        <h4>Step 2: Pengisian Biodata</h4>
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <button type="button" class="btn btn-secondary" id="backToStep1">Back</button>
        <button type="button" class="btn btn-primary" id="nextToStep3">Next</button>
    </div>

    <!-- Step 3: Pembayaran -->
    <div id="step3" style="display:none;">
        <h4>Step 3: Pembayaran</h4>
        <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card package-card">
                        <img src="<?= base_url($pesan->Thumbnail) ?>" class="card-img-top" alt="<?= $pesan->Name ?>" width="100%" height="380px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pesan->Name ?></h5>
                            <p>Tanggal : <?= $tanggal ?> <br> Person : <?= $qty ?></p>                            
                            <p class="card-text float-right">IDR <?= number_format($pesan->Price, 0, ',', '.'); ?><br>Subtotal Price</p>
                        </div>
                    </div>
                </div>
                            
            </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title px-3 pt-4">
                        <h4>Your Info Details</h4>
                    </div>
                    <div class="card-body mb-3">
                        <div class="row mb-2">
                            <div class="col-md-1"></div>
                            <div class="col-md-4"><b>Nama:</b> </div>
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
                <p><center>Total : <b>IDR <?= number_format($harga, 0, ',', '.'); ?></b></center>
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
        document.getElementById('step1').style.display = 'none';
        document.getElementById('step2').style.display = 'block';
        $("#progress-bar").css("width", "66%").text("Step 2 of 3");
       
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
        var checkin = '<?= $tanggal ?>';
        
        // Dapatkan detail pesanan
        var items = document.querySelectorAll('.package-card');
        
        
        // Dapatkan total pembayaran
        var harga = <?= $pesan->Price ?>;
        var tour = '<?= $pesan->Name ?>';
        var totalAmount = <?= $harga ?>;
        var kode = <?= $pesan->Id ?>;
        var qty = <?= $qty ?>;
        // Data yang akan dikirimkan ke server
        var orderDetails = tour + " - " + harga + " \n person: "+qty;
        
        var data = {
            name: name,
            email: email,
            phone: phone,
            kode: kode,
            qty: qty,
            title: tour,
            harga: harga,
            totalAmount: totalAmount
        };
        // Kirim data ke server menggunakan AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url("Payment/tourpackage") ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if (validateForm(name, email, phone)) {
                    // If valid, send WhatsApp message
                    localStorage.removeItem('cart');
                    sendWhatsApp(name, email, phone, checkin, totalAmount, orderDetails);
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
    function validateForm(name, email, phone) {
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

    // Fungsi untuk mengirim pesan WhatsApp
    function sendWhatsApp(name, email, phone, checkin, totalAmount, orderDetails) {
        // Format pesan WhatsApp
        var message = encodeURIComponent("Biodata Pembeli:\n" + "Nama: " + name + "\nEmail: " + email + "\nTelepon: " + phone + "\nTanggal:" + checkin  +"\n\nDetail Pesanan:\n" + orderDetails + "\nTotal Pembayaran:\n" + totalAmount);

        // Nomor WhatsApp tujuan
        var whatsappNumber = "6282266509516";

        // URL WhatsApp dengan nomor tujuan dan pesan
        var whatsappURL = "https://api.whatsapp.com/send?phone=" + whatsappNumber + "&text=" + message;

        // Buka WhatsApp dengan URL yang telah dibuat
        window.location.href = whatsappURL;
        // window.open(whatsappURL, '_blank');
    }
</script>

   