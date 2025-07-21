<x-layout>
    <div class="min-h-screen flex">
        {{-- Sidebar --}}
        @include('dashboard-admin.layouts.sidebar')

        {{-- Konten Utama --}}
        <div class="flex-1 ml-64 p-6">
            <h2 class="text-2xl font-semibold mb-4">Ubah Profil</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')

                <div class="mb-3 flex justify-center">
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/avatars/' . Auth::user()->avatar) }}" alt="Foto Profil" class="rounded-full object-cover" width="100" height="100">
                    @else
                        <div class="rounded-full bg-gray-400 text-white flex items-center justify-center" style="width: 100px; height: 100px; font-size: 40px;">
                            {{ strtoupper(substr(Auth::user()->email, 0, 1)) }}
                        </div>
                    @endif
                </div>

                {{-- Email (readonly) --}}
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="w-full border px-4 py-2 rounded" readonly>
                </div>

                {{-- Name --}}
                <div>
                    <label class="block text-gray-700">Nama</label>
                    <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="w-full border px-4 py-2 rounded">
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </div>
</x-layout>
