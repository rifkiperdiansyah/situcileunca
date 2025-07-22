<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body>
    <h2>Laporan Transaksi</h2>

    @if(request('date'))
        <p><strong>Tanggal:</strong> {{ request('date') }}</p>
    @elseif(request('month'))
        <p><strong>Bulan:</strong> {{ request('month') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Hanphone</th>
                <th>Total Harga</th>
                <th>Tanggal Kunjungan</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $index => $transaction)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $transaction->name_customer }}</td>
                    <td>{{ $transaction->no_phone }}</td>
                    <td>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                    <td>{{ Carbon\Carbon::parse($transaction->date_transaction)->format('d-m-Y') }}</td>
                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        window.print();
    </script>
</body>
</html>
