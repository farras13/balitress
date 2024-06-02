<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Kamar Hotel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#single-room">Single Room</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#double-room">Double Room</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#suite-room">Suite Room</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="single-room" class="container tab-pane active"><br>
                <h3>Single Room</h3>
                <form>
                    <div class="form-group">
                        <label for="checkin">Check-in Date:</label>
                        <input type="date" class="form-control" id="checkin" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out Date:</label>
                        <input type="date" class="form-control" id="checkout" required>
                    </div>
                    <div class="form-group">
                        <label for="guests">Number of Guests:</label>
                        <input type="number" class="form-control" id="guests" min="1" max="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div id="double-room" class="container tab-pane fade"><br>
                <h3>Double Room</h3>
                <form>
                    <div class="form-group">
                        <label for="checkin2">Check-in Date:</label>
                        <input type="date" class="form-control" id="checkin2" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout2">Check-out Date:</label>
                        <input type="date" class="form-control" id="checkout2" required>
                    </div>
                    <div class="form-group">
                        <label for="guests2">Number of Guests:</label>
                        <input type="number" class="form-control" id="guests2" min="1" max="2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div id="suite-room" class="container tab-pane fade"><br>
                <h3>Suite Room</h3>
                <form>
                    <div class="form-group">
                        <label for="checkin3">Check-in Date:</label>
                        <input type="date" class="form-control" id="checkin3" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout3">Check-out Date:</label>
                        <input type="date" class="form-control" id="checkout3" required>
                    </div>
                    <div class="form-group">
                        <label for="guests3">Number of Guests:</label>
                        <input type="number" class="form-control" id="guests3" min="1" max="4" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
