<x-layout>
<div class="flex items-center justify-center min-h-screen bg-green-50">
    <div class="bg-white p-8 rounded shadow-lg text-center max-w-md w-full">
        <h1 class="text-2xl font-semibold text-green-600 mb-4">Transaksi Berhasil</h1>
        <p class="text-gray-700 mb-6">Terima kasih! Transaksi Anda telah berhasil diproses.</p>

        <a href="{{ url('/tiket') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">
            Kembali ke Halaman Utama
        </a>
    </div>
</div>
</x-layout>
