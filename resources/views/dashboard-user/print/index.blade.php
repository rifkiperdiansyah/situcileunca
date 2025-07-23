<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Tiket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rombongan: '#fef08a',
                        perorang: '#bfdbfe',
                    },
                }
            }
        }
    </script>
    <style>
        @media print {
            .no-print { display: none !important; }
            body {
                margin: 0;
                padding: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            .ticket {
                page-break-inside: avoid;
                break-inside: avoid;
            }
        }
    </style>
</head>
<body class="bg-gray-100 py-8 px-4">

@php
    use SimpleSoftwareIO\QrCode\Facades\QrCode;

    $quantity     = $transaction->quantity  ?? 1;
    $type         = $transaction->type      ?? 'per_orang';
    $isRombongan  = $type === 'rombongan';
    $bgColor      = $isRombongan ? 'bg-rombongan border-rombongan' : 'bg-perorang border-perorang';
    $textColor    = $isRombongan ? 'text-yellow-800' : 'text-blue-800';
    $label        = $isRombongan ? 'Rombongan' : 'Per Orang';
@endphp

<div class="space-y-6">
    @for ($i = 1; $i <= $quantity; $i++)
        <div class="ticket {{ $bgColor }} border-2 border-dashed rounded-lg p-6 mx-auto max-w-sm shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-2 {{ $textColor }}">🎟️ Tiket {{ $label }} Situ Cileunca</h2>
            <p class="text-sm text-gray-600 mb-4">ID Transaksi: <span class="font-medium">{{ $transaction->id }}</span></p>

            {{-- Konten tiket --}}
            <div class="text-left text-sm space-y-1 leading-relaxed mb-4">
                <p><strong>Nama Pemesan:</strong> {{ $transaction->name_customer }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $transaction->no_phone }}</p>
                <p><strong>Tanggal Kunjungan:</strong> {{ \Carbon\Carbon::parse($transaction->date_transaction)->format('d M Y') }}</p>
                <p><strong>Jenis Tiket:</strong> {{ $label }}</p>
                <p><strong>Batch:</strong> {{ $i }} / {{ $quantity }}</p>
            </div>

            {{-- QR Code --}}
            <div class="flex justify-center mb-2">
                {!! QrCode::size(80)->generate("Tiket#{$transaction->id}-{$i}") !!}
            </div>

            <div class="mt-2 text-xs text-gray-500 border-t border-dashed pt-2">
                Tunjukkan tiket ini saat memasuki lokasi
            </div>
        </div>
    @endfor
</div>

<div class="no-print text-center mt-8">
    <button onclick="window.print()" class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800 transition">
        🖨️ Cetak Tiket
    </button>
    <a href="{{ route('dashboard-user.index') }}" class="ml-4 text-gray-700 underline hover:text-gray-900">
        Kembali ke Dashboard
    </a>
</div>

<script>
window.addEventListener('load', () => {
    setTimeout(() => window.print(), 300);
});
</script>

</body>
</html>
