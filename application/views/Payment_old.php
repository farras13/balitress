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
                <div class="form-group">
                    <label for="pickup">Penjemputan</label>
                    <select class="form-control" id="pickup" name="pickup">
                        <option value="none">Tidak Perlu Penjemputan</option>
                        <option value="hotel">Penjemputan di Hotel (+$50)</option>
                        <option value="airport">Penjemputan di Bandara (+$75)</option>
                    </select>
                </div>

                <!-- Opsi Aktivitas -->
                <div class="form-group">
                    <label for="activities">Pilih Aktivitas</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="snorkeling" id="activity1" name="activities[]">
                        <label class="form-check-label" for="activity1">
                            Snorkeling (+$100)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="diving" id="activity2" name="activities[]">
                        <label class="form-check-label" for="activity2">
                            Diving (+$150)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="mangrove" id="activity3" name="activities[]">
                        <label class="form-check-label" for="activity3">
                            Mangrove Tour (+$80)
                        </label>
                    </div>
                </div>

                <!-- Total Harga -->
                <div class="form-group">
                    <label for="total">Total Harga</label>
                    <input type="text" class="form-control" id="total" name="total" readonly>
                </div>

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
                <div class="form-group">
                    <label for="cardNumber">Nomor Kartu Kredit</label>
                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                </div>
                <div class="form-group">
                    <label for="expiryDate">Tanggal Kedaluwarsa</label>
                    <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" required>
                </div>

                <button type="button" class="btn btn-secondary" id="backToStep2">Back</button>
                <button type="submit" class="btn btn-success">Submit Payment</button>
            </div>
        </form>
    </div>