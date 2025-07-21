<x-layout>
    <div class="min-h-screen">
        {{-- Sidebar --}}
        @include('dashboard-admin.layouts.sidebar')

        {{-- Konten utama --}}
        <div class="ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4">Edit Tiket</h2>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-xl">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">Nama Tiket</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $ticket->name) }}" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
                </div>

                <div class="mb-4">
                    <label for="price" class="block font-medium text-gray-700">Harga</label>
                    <input type="number" name="price" id="price" value="{{ old('price', $ticket->price) }}" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">
                </div>

                <div class="mb-4">
                    <label for="description" class="block font-medium text-gray-700">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 rounded px-3 py-2 mt-1">{{ old('description', $ticket->description) }}</textarea>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update Tiket</button>
                    <a href="{{ route('tickets.index') }}" class="text-gray-600 hover:underline">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
