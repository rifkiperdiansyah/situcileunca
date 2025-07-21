<x-layout>
    <div class="min-h-screen">
        {{-- Sidebar --}}
        @include('dashboard-admin.layouts.sidebar')

        {{-- Konten utama --}}
        <div class="ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4">Edit Transaction</h2>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('transactions.update', $transaction->id) }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-xl">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Nama</label>
                    <input type="text" name="name_customer" id="name" value="{{ old('name', $transaction->name_customer) }}" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
                </div>

                {{-- no phone --}}
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Nomor Telepon</label>
                    <input type="text" name="no_phone" id="no_phone" value="{{ old('no_phone', $transaction->no_phone) }}" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
                </div>

                {{-- email --}}
                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Tanggal Kunjungan</label>
                    <input type="date" name="date_transaction" id="date_transaction" value="{{ old('date_transaction', $transaction->date_transaction) }}" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update Data Transaction</button>
                    <a href="{{ route('transactions.index') }}" class="text-gray-600 hover:underline">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
