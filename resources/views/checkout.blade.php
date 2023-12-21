<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="midtrans.client_key"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

</head>

<body>


    <!-- Add a new element to display the Snap token -->
    <div id="snap-container"></div>
    <div class="container">
        <h1 class="my-3">RAtu BOga</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/durian.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td> : {{ $order->name }}</td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td> : {{ $order->phone }}</td>
                    </tr>

                    <tr>
                        <td>Qty</td>
                        <td> : {{ $order->qty }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td> : {{ $order->total_price }}</td>
                    </tr>
                </table>
                <button class="btn btn-primary mt-3" id="pay-button">Bayar Sekarang</button>
            </div>
        </div>

        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result) {
                        /* You may add your own implementation here */
                        alert("payment success!");
                        window.location.href = '/invoice/{{ $order->id }}'
                        console.log(result);
                    },
                    onPending: function(result) {
                        /* You may add your own implementation here */
                        alert("wating your payment!");
                        console.log(result);
                    },
                    onError: function(result) {
                        /* You may add your own implementation here */
                        alert("payment failed!");
                        console.log(result);
                    },
                    onClose: function() {
                        /* You may add your own implementation here */
                        alert('you closed the popup without finishing the payment');
                    }
                })
            });
        </script>
</body>

</html>
