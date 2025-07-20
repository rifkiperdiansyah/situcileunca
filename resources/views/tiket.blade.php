    <x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <style>
        body {
        background-color: #f9fafb;
        }
        .ticket-box {
        padding: 20px;
        border: 2px solid #4f46e5;
        border-radius: 10px;
        background-color: #ffffff;
        }
        .highlight {
        color: red;
        }
        .input-label {
        margin-top: 15px;
        display: block;
        }
    </style>

    <div class="container mx-auto px-4 py-10">
    <form action="/order-ticket" method="POST">
        @csrf
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Ticket Selection -->
            <div class="w-full md:w-1/2">
                <div class="ticket-box h-full">
                    <h2 class="text-lg font-semibold mb-4">Pilih Tiket Dibawah Ini</h2>

                    <!-- Tiket Per Orang -->
                    <label class="block w-full">
                        <input type="radio" name="ticket_type" value="per_orang" class="hidden peer" checked>
                        <div
                            class="w-full py-3 px-4 mt-2 rounded cursor-pointer text-white
                            bg-blue-600
                            peer-checked:bg-green-600 peer-checked:ring-2 peer-checked:ring-green-400 transition">
                            <div class="font-semibold">Tiket Per Orang</div>
                            <div class="text-sm">IDR 15.000</div>
                        </div>
                    </label>

                    <!-- Tiket Rombongan -->
                    <label class="block w-full">
                        <input type="radio" name="ticket_type" value="rombongan" class="hidden peer">
                        <div
                            class="w-full py-3 px-4 mt-4 rounded cursor-pointer text-white
                            bg-blue-600
                            peer-checked:bg-green-600 peer-checked:ring-2 peer-checked:ring-purple-400 transition">
                            <div class="font-semibold">
                                Tiket Rombongan <span class="text-yellow-300 font-bold">5%</span>
                            </div>
                            <div class="text-sm">IDR 15.000</div>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Form Section -->
            <div class="w-full md:w-1/2">
                <div class="ticket-box">
                    <h2 class="text-lg font-semibold">Formulir Pemesanan</h2>

                    <label class="input-label">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan Nama">
                    @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror

                    <label class="input-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan Email">
                    @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror

                    <label class="input-label">Nomor Telepon</label>
                    <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan Nomor Telepon">
                    @error('phone')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror

                    <label class="input-label">Tanggal</label>
                    <input type="date" name="date" value="{{ old('date') }}" class="w-full p-2 border border-gray-300 rounded">
                    @error('date')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror

                    <div class="flex items-center mt-4 gap-2">
                        <span>Jumlah Tiket:</span>
                        <button type="button" onclick="decrease()" class="px-3 py-1 bg-gray-200 rounded">-</button>
                        <input type="number" id="ticketCount" name="ticket_count" value="{{ old('ticket_count', 1) }}" class="w-16 text-center border border-gray-300 rounded" min="1">
                        <button type="button" onclick="increase()" class="px-3 py-1 bg-gray-200 rounded">+</button>
                    </div>

                    <button type="submit" class="w-full py-2 mt-4 text-white bg-green-600 hover:bg-green-700 rounded">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>
    </form>

    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif
</div>


    <script>
        function increase() {
            const input = document.getElementById('ticketCount');
            input.value = parseInt(input.value) + 1;
        }

        function decrease() {
            const input = document.getElementById('ticketCount');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        document.querySelectorAll('input[name="ticket_type"]').forEach(radio => {
            radio.addEventListener('change', function () {
                const input = document.getElementById('ticketCount');
                if (this.value === 'rombongan' && parseInt(input.value) < 10) {
                    input.value = 10;
                } else if (this.value === 'per_orang') {
                    input.value = 1;
                }
            });
        });
    </script>
    </x-layout>
