<x-layout>
<div class="container mx-auto px-4 mt-10">
    <h2 class="text-2xl font-semibold mb-6">Daftar Transaksi Tiket</h2>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">No</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Nama</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Nomer HP</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Tanggal Kunjungan</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Total Harga</th>
                    <th class="px-6 py-3 text-left font-medium text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($transactions as $index => $transaction)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $transaction->name_customer }}</td>
                        <td class="px-6 py-4">{{ $transaction->no_phone }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($transaction->date)->format('d M Y') }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</td>
                        <td class="px-4 py-2">
                            <a
                                href="{{ route('transactions.print', $transaction->id) }}"
                                target="_blank"
                                class="inline-block bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700"
                            >
                                Cetak
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center px-6 py-4 text-gray-500">Belum ada transaksi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-layout>
