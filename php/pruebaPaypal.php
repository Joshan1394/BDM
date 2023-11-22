<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script
        src="https://www.paypal.com/sdk/js?currency=MXN&client-id=AVchtxEgqt6k6TWU82egjtL70BmKvrtr0AeUqRkdf0npmfVjXCd1hIi0U60yOElay3S8wUzdPhw-dffm"></script>


</head>

<body>

    <div id="paypal-button-container"></div>


    <script>
        paypal.Buttons({
            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100,
                            currency_code: 'MXN'
                        }
                    }]
                });
            },

            onApprove: function (data, actions) {
                actions.order.capture().then(function (detalles) {
                    console.log(detalles);
                });
            },

            onCancel: function (data) {
                alert("pago cancelado");
                console.log(data);
            }
        }).render('#paypal-button-container')
    </script>


</body>

</html>