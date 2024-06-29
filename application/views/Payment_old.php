<div class="container mt-5">
        <h2 class="mb-4">Payment</h2>

        <!-- Progress bar -->
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 33%" id="progress-bar">Step 1 of 3</div>
        </div>

        <!-- Form pembayaran -->
        <form id="paymentForm">
            <!-- Step 1: Verifikasi Pesanan -->
            <div id="step1">
                <h4>Step 1: Verifikasi Pesanan</h4>
                <!-- Opsi Penjemputan -->
                <div id="cart-items">
                <!-- Cart items will be dynamically inserted here -->
                </div>
                <div id="total-amount"></div>

                <button type="button" class="btn btn-primary" id="nextToStep2">Next</button>
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
                <div id="confirmation-details">
                    <!-- Confirmation details will be dynamically inserted here -->
                </div>

                <button type="button" class="btn btn-secondary" id="backToStep2">Back</button>
                <button type="submit" class="btn btn-success">Submit Payment</button>
            </div>
        </form>
    </div>