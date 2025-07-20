<!DOCTYPE html>
<html>
<head>
    <title>Proses Pembayaran</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .payment-container h2 {
            margin-bottom: 15px;
            color: #333;
        }

        .payment-container p {
            color: #555;
            margin-bottom: 30px;
        }

        .btn-back {
            margin-top: 20px;
            display: inline-block;
            background-color: #ccc;
            color: #333;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.2s;
        }

        .btn-back:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Proses Pembayaran</h2>
        <p>Mohon tunggu sebentar, Anda akan diarahkan ke halaman pembayaran.</p>

        <a href="{{ url()->previous() }}" class="btn-back">← Kembali</a>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    <script type="text/javascript">
        snap.pay('{{ $snapToken }}', {
            onSuccess: function(result) {
                console.log("Pembayaran sukses", result);
                window.location.href = '/transaction/success';
            },
            onPending: function(result) {
                console.log("Menunggu pembayaran", result);
            },
            onError: function(result) {
                console.error("Terjadi kesalahan", result);
                alert("Terjadi kesalahan saat memproses pembayaran.");
            }
        });
    </script>
</body>
</html>
