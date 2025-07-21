<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Tiket</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            }
        }
    </script>

    {{-- Print-specific styles --}}
    <style>
        @media print {
            .no-print {
                display: none;
            }
            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>
<body class="bg-gray-100 py-10 px-6">

    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold text-center mb-6">Tiket Pemesanan</h1>

        <div class="mb-4">
            <p><strong>Nama Pemesan:</strong> {{ $transaction->name_customer?? 'Nama tidak tersedia' }}</p>
            <p><strong>Nomer Telepon:</strong> {{ $transaction->no_phone ?? '-' }}
            <p><strong>Total Harga:</strong> Rp{{ number_format($transaction->amount, 0, ',', '.') }}</p>
            <p><strong>Tanggal Kunjungan:</strong> {{ $transaction->date_transaction ?? '-' }}</p><p><strong>
        </div>

        <div class="text-center mt-6 no-print">
            <button onclick="window.print()" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">
                Cetak Tiket
            </button>
            <a href="{{ route('dashboard-user.index') }}"
               class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Kembali
            </a>
        </div>
    </div>
</body>
</html>
