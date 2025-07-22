<x-layout>
    <div class="min-h-screen">
        {{-- Sidebar --}}
        @include('dashboard-admin.layouts.sidebar')

        {{-- Konten utama --}}
        <div class="ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4">Daftar Order</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-6">
                    <form method="GET" action="#" class="flex items-center gap-2">
                        <label for="date" class="text-sm font-medium text-gray-700">Tanggal:</label>
                        <input type="date" id="date" name="date" value="{{ request('date') }}"
                            class="border border-gray-300 rounded px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                        <button type="submit"
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
                            Filter Harian
                        </button>
                    </form>

                    <form method="GET" action="#" class="flex items-center gap-2">
                        <label for="month" class="text-sm font-medium text-gray-700">Bulan:</label>
                        <input type="month" id="month" name="month" value="{{ request('month') }}"
                            class="border border-gray-300 rounded px-3 py-2 text-sm shadow-sm focus:outline-none focus:ring focus:border-blue-500">
                        <button type="submit"
                                class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm">
                            Filter Bulanan
                        </button>
                    </form>

                    <div>
                        <a href="{{ route('transactions.print-report', ['date' => request('date'), 'month' => request('month')]) }}"
                        target="_blank" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 text-sm">
                        🖨️ Print
                        </a>
                    </div>
                </div>

                <table class="min-w-full bg-white border border-gray-200 text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">No</th>
                            <th class="px-4 py-2 border">Nama</th>
                            <th class="px-4 py-2 border">Tanggal</th>
                            <th class="px-4 py-2 border">Tanggal Kunjungan</th>
                            <th class="px-4 py-2 border">Status</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $index => $transaction)
                        <tr>
                            <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 border">{{ $transaction->name_customer }}</td>
                            <td class="px-4 py-2 border">{{ $transaction->created_at }}</td></td>
                            <td class="px-4 py-2 border">{{ $transaction->date_transaction }}</td>
                            <td class="px-4 py-2 border">Sukses</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('transactions.edit', $transaction->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-{{ $transaction->id }}').submit();" class="text-red-600 hover:text-red-800">Hapus</a><form id="delete-{{ $transaction->id }}" action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display: none;">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-4 py-2 text-center text-gray-500 border">Belum ada Transaksi</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
