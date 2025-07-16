<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  
    <title>Ticket Selection</title>
    <style>
        body {
            background-color: #f9fafb; /* Light background */
        }
        .container {
            display: flex;
            justify-content: space-around;
            margin: 50px;
        }
        .ticket-box {
            padding: 20px;
            border: 2px solid #4f46e5; /* Border color */
            border-radius: 10px;
            background-color: #ffffff; /* White background */
        }
        .highlight {
            color: red; /* Highlight color for discount */
        }
        .input-label {
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Ticket Selection Section -->
        <div class="ticket-box">
            <h2 class="text-lg font-semibold">Pilih Tiket Dibawah Ini</h2>
            <button class="w-full py-2 mt-4 text-white bg-blue-600 hover:bg-blue-700 rounded">
                Tiket Per Orang
                <div>IDR 15000</div>
            </button>
            <button class="w-full py-2 mt-4 text-white bg-blue-600 hover:bg-blue-700 rounded">
                Tiket Rombongan <span class="highlight">5%</span>
                <div>IDR 15000</div>
            </button>
        </div>

        <!-- Form Section -->
        <div class="ticket-box">
            <h2 class="text-lg font-semibold">Pilih Tiket Dibawah Ini</h2>
            <label class="input-label">Nama</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan Nama">
            <label class="input-label">Email</label>
            <input type="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan Email">
            <label class="input-label">Nomor Telepon</label>
            <input type="tel" class="w-full p-2 border border-gray-300 rounded" placeholder="Masukkan Nomor Telepon">
            <label class="input-label">Tanggal</label>
            <input type="date" class="w-full p-2 border border-gray-300 rounded">
            
            <div class="flex items-center mt-4">
                <div>Jumlah Tiket:</div>
                <button class="px-4 py-2 text-gray-600 bg-gray-200 rounded-l">-</button>
                <div class="px-4 py-2">1</div>
                <button class="px-4 py-2 text-gray-600 bg-gray-200 rounded-r">+</button>
            </div>
            <button class="w-full py-2 mt-4 text-white bg-green-600 hover:bg-green-700 rounded">
                Lanjutkan
            </button>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.0/dist/flowbite.min.js"></script>


</x-layout> 
