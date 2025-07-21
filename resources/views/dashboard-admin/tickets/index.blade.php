<x-layout>
    <div class="min-h-screen">
        {{-- Sidebar --}}
        @include('dashboard-admin.layouts.sidebar')

        {{-- Konten utama --}}
        <div class="ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4">Daftar Tiket</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('tickets.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Tiket</a>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 text-sm text-left">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-2 border">No</th>
                            <th class="px-4 py-2 border">Nama Tiket</th>
                            <th class="px-4 py-2 border">Harga</th>
                            <th class="px-4 py-2 border">Deskripsi</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tickets as $index => $ticket)
                        <tr>
                            <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                            <td class="px-4 py-2 border">{{ $ticket->name }}</td>
                            <td class="px-4 py-2 border">Rp {{ number_format($ticket->price, 0, ',', '.') }}</td>
                            <td class="px-4 py-2 border">{{ $ticket->description }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('tickets.edit', $ticket->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-{{ $ticket->id }}').submit();" class="text-red-600 hover:text-red-800">Hapus</a><form id="delete-{{ $ticket->id }}" action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display: none;">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center text-gray-500 border">Belum ada tiket</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
