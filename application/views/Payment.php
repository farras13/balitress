<!DOCTYPE html>
<html>
<head>
    <title>Payment Gateway</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="YOUR_CLIENT_KEY"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
    <button id="pay-button">Pay!</button>
    <form id="payment-form" method="post" action="<?= site_url() ?>/payment/finish">
        <input type="hidden" name="result_type" id="result-type" value=""></div>
        <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>

    <script type="text/javascript">
    $('#pay-button').click(function (event) {
        event.preventDefault();
        $.ajax({
            url: '<?= site_url() ?>payment/token',
            cache: false,

            success: function(data) {
                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                }

                snap.pay(data, {
                    onSuccess: function(result) {
                        changeResult('success', result);
                        $("#payment-form").submit();
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        $("#payment-form").submit();
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
