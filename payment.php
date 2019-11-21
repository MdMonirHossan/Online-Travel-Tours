<?php
    
    // include header and title
    include 'header.php';
    echo '<title>Payment Getway</title>';
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Please Confirm your Payment</h2>
            <div id="pay-btn"></div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AcJUvIsIe32SL_mTVJaxawHyJmM6AuySvVHjOBdBIwiAdLGXd42h4U-Mn3yRAYda0fl4Baozb7yTojTa"></script>
<script>paypal.Buttons().render('#pay-btn');</script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
            purchase_units: [{
                amount: {
                value: '0.01'
                }
            }]
            console.log("Payment complete");
            });
        }
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                window.alert('Transaction completed by ' + details.payer.name.given_name);
                // Call your server to save the transaction
                return fetch('/paypal-transaction-complete', {
                method: 'post',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify({
                    orderID: data.orderID
                })
                });
            });
        }
    }).render('#pay-btn');
</script>
<?php
	include 'footer.php';
?>
</body>