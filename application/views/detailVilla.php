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
    <div class="row popup-gallery">
        <div class="col-md-12">
            <a href="<?= base_url(''.$villa->image) ?>" class="popup-link">
                <center><img src="<?= base_url(''.$villa->image) ?>" class="img-fluid main-img" id="mainImage" alt="Main Image"></center>
            </a>
        </div>
        <div class="row gallery" id="gallery1">
            <?php $index=1; foreach($gallery as $img): ?>
                <div class="col-md-3 mt-5" <?php if($index>4){echo "hidden"; } ?>>
                    <a href="<?= base_url().$img->image ?>" class="popup-link">
                        <img src="<?= base_url().$img->image ?>" alt="Image" class="img-thumbnail thumb-image">
                    </a>
                </div>
            <?php $index++; endforeach; ?>
        </div>
    </div>
    
    <div class="row">
        <!-- Bali Trees -->
        <div class="col-md-12 col-lg-8 mb-4">
            <div class="card">
                <div class="card-body">
                <h1 class="card-title text-center text-primary my-3"><span class="text-dark"><?= $villa->name ?></h1>
                    <div class="card-text">
                        <p><?= $villa->deskripsi ?></p>
                        <div class="row my-3">
                            <div class="col-md-6">                                    
                                <h2><strong>Room Facilities:</strong></h2>
                                <ul>
                                    <?php foreach($fasilitas as $f){ ?>
                                    <li><?= $f->facility_name ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h2>View</h2>
                                <p><?= $villa->pemandangan ?></p>
                                <h2>Location</h2>
                                <p><?= $villa->lokasi ?></p>
                            </div>
                        </div>  
                        <div class="col-md-12">
                            <h2><b>Choose Your Package</b></h2>
                                <div class="package-item bg-white mb-2" >
                                    <div class="p-4">
                                        <a class="h5 text-decoration-none" href="#">Room Only</a>
                                        <!-- <p class="mb-3"><?= $villa->lite_deskripsi ?></p> -->
                                        <div class="border-top mt-4 pt-4">
                                            <?php foreach($rooms as $idx => $r){  ?>
                                            <div class="row mb-4 align-items-center package-room" data-package="<?= $villa->name . "-" . $r->room_name ?>" data-price="<?= $r->price ?>">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-6">
                                                    <small><b><?= $r->room_name.$idx ?></b></small>
                                                    <h6 class="m-0">Rp <?= number_format($r->price, 2, '.', ','); ?>/night</h6>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-sm select-room">Select Package</button>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-item bg-white mb-2" >
                                    <div class="p-4">
                                        <a class="h5 text-decoration-none" href="#">Room + Meals</a>
                                        <!-- <p class="mb-3"><?= $villa->lite_deskripsi ?></p> -->
                                        <div class="border-top mt-4 pt-4">
                                            <?php foreach($rooms as $idx => $r){  ?>
                                            <div class="row mb-4 align-items-center package-room" data-package="<?= $villa->name . " + Meals -" . $r->room_name ?>" data-price="<?= $r->price_meals ?>">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-6">
                                                    <small><b><?= $r->room_name.$idx ?></b></small>
                                                    <h6 class="m-0">Rp <?= number_format($r->price_meals, 2, '.', ','); ?>/night</h6>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-sm select-room">Select Package</button>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="package-item bg-white mb-2" >
                                    <div class="p-4">
                                        <a class="h5 text-decoration-none" href="#">Room + Package</a>
                                        <!-- <p class="mb-3"><?= $villa->lite_deskripsi ?></p> -->
                                        <div class="border-top mt-4 pt-4">
                                            <?php foreach($rooms as $r){  ?>
                                            <div class="row mb-4 align-items-center package-room" data-package="<?= $villa->name . " Package -" . $r->room_name ?>" data-price="<?= $r->price_package ?>">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-6">
                                                    <small><b><?= $r->room_name ?></b></small>
                                                    <h6 class="m-0">Rp <?= number_format($r->price_package, 2, '.', ','); ?>/night</h6>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary btn-sm select-room">Select Package</button>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="row mb-4 align-items-center package-room" data-package="<?= $villa->name . " Package -" . $r->room_name ?>" data-price="<?= $r->price_package ?>">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-6">
                                                    <small><b> Yoga & Retreat Package </b></small>
                                                    <small>See our package & Get the Best Deals</small>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="<?= base_url("activities") ?>" class="btn btn-primary btn-sm select-room">Select Package</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <center><button class="btn btn-primary mt-3" id="add-to-cart" hidden>Add to cart</button></center>
                        </div>
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
                        <div id="cart-items" class="row pt-3">
                            <div class="col"><p>No one choosed</p></div>
                        </div>
                        <table class="mt-3 mb-3" width="100%">
                            <tbody>
                                <tr>
                                    <td><h5>Total</h5></td>
                                    <td class="text-right"><h5><strong id="total-amount">Rp 0</strong></h5></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?= base_url("Home/Payment") ?>" class="btn btn-primary btn-block mb-3" id="pay-button">Proceed to Payment</a>
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
                <?php foreach($others as $o){ ?>
                <div class="post-slide">
                <div class="post-img">
                    <img src="<?= base_url().$o->image ?>" alt="">
                    <a href="<?= base_url('villa/detail/').$o->id ?>" class="over-layer"><i class="fa fa-link"></i></a>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                    <a href="#"><?= $o->name ?></a>
                    </h3>
                    <p class="post-description">
                    <?php   
                            $descriptions = strip_tags($o->deskripsi);
                            if (strlen($descriptions) > 120) {
                                $descriptions = substr($descriptions, 0, 120) . '...';
                            }
                            echo $descriptions;
                        ?>
                    </p>
                    <a href="<?= base_url('villa/detail').$o->id ?>" class="read-more">Explore</a>
                </div>
                </div>   
                <?php } ?>
            </div>
        </div>
    </div>   
</div>


<script>
    let selectedPackages = [];

    // Function to select a package
    document.querySelectorAll('.select-room').forEach(button => {
        button.addEventListener('click', () => {
            const packageItem = button.closest('.package-room');
            const packageName = packageItem.getAttribute('data-package');
            const price = parseInt(packageItem.getAttribute('data-price'));
            addToCart(packageName, price);
            // selectedPackages.push({ packageName, price });
            button.disabled = false; // Disable the button after selection
        });
    });

    // Function to add selected packages to the cart
    // document.getElementById('add-to-cart').addEventListener('click', () => {
    //     selectedPackages.forEach(item => {
    //         addToCart(item.packageName, item.price);
    //     });
    //     selectedPackages = []; // Clear the selected packages after adding to cart
    //     document.querySelectorAll('.select-room').forEach(button => {
    //         button.disabled = false; // Enable all buttons for new selection
    //     });
    // });

    let cart = [];

    // Function to add item to the cart
    function addToCart(packageName, price) {
        let itemIndex = cart.findIndex(item => item.packageName === packageName);
        if (itemIndex !== -1) {
            cart[itemIndex].quantity += 1;
        } else {
            cart.push({ packageName, price, quantity: 1 });
        }

        // Update cart display
        updateCart();

        // Store cart data in localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Function to update the cart display
    function updateCart() {
        let cartItemsContainer = document.getElementById('cart-items');
        let totalAmount = 0;
        cartItemsContainer.innerHTML = '';

        if (Array.isArray(cart) && cart.length > 0) {
            cart.forEach((item, index) => {
                totalAmount += item.price * item.quantity;
                cartItemsContainer.innerHTML += `
                    <div class="row pt-3">
                        <div class="col-xs-1">
                            <button class="btn btn-link text-danger px-3" onclick="removeFromCart(${index})">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                        <div class="col">
                            <h6>${item.packageName}</h6>
                            <small>${item.quantity} room${item.quantity > 1 ? 's' : ''}</small>
                        </div>
                        <div class="col text-right">
                            <strong>Rp ${(item.price * item.quantity).toLocaleString()}</strong>
                        </div>
                    </div>
                `;
            });
        } else {
            cartItemsContainer.innerHTML = '<div class="col"><p>No one chose</p></div>';
        }

        document.getElementById('total-amount').innerText = `Rp ${totalAmount.toLocaleString()}`;
    }

    // Function to remove item from the cart
    function removeFromCart(index) {
        cart.splice(index, 1);
        // Update cart display
        updateCart();

        // Update localStorage after removing item
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Function to retrieve cart data from localStorage on page load
    function retrieveCartFromStorage() {
        let storedCart = localStorage.getItem('cart');
        if (storedCart) {
            cart = JSON.parse(storedCart);
            // Update cart display
            updateCart();
        }
    }

    function sendDataToServer() {
    let cartData = localStorage.getItem('cart');
    if (cartData) {
        $.ajax({
            url: '<?= base_url('payment/save_cart_to_database') ?>', // Adjust the URL according to your CodeIgniter route
            type: 'POST',
            data: { cartData: cartData },
            success: function(response) {
                console.log('Data saved successfully:', response);
                // Optionally, clear localStorage after data is saved
                localStorage.removeItem('cart');
            },
            error: function(xhr, status, error) {
                console.error('Error saving data:', error);
            }
        });
    } else {
        console.error('No cart data found in localStorage.');
    }
}

    // On page load, retrieve cart data from localStorage
    document.addEventListener('DOMContentLoaded', function() {
        retrieveCartFromStorage();
    });



</script>


