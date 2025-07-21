<x-layout>
    <div class="min-h-screen">
        {{-- Sidebar --}}
        @include('dashboard-admin.layouts.sidebar')

        {{-- Konten utama --}}
        <div class="ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4">Tambah Tiket</h2>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tickets.store') }}" method="POST" class="bg-white p-6 rounded shadow-md max-w-xl">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Tiket</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" name="price" id="price" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2" value="{{ old('price') }}" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2">{{ old('description') }}</textarea>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('tickets.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Kembali</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
