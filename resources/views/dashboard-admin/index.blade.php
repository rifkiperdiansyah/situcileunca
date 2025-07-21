<x-layout>
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('dashboard-admin.layouts.sidebar')

        <!-- Main content -->
        <main class="flex-1 p-6 md:ml-64">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Total User -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
                            <i class="bi bi-people-fill text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Total User</h3>
                            <p class="text-2xl font-bold">{{ $totalUsers }}</p>
                        </div>
                    </div>
                </div>

                <!-- Total Pengunjung -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-green-100 text-green-600 rounded-full">
                            <i class="bi bi-person-fill text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Total Pengunjung</h3>
                            <p class="text-2xl font-bold">{{ $totalPengunjung }}</p>
                        </div>
                    </div>
                </div>

                <!-- Total Transaksi -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center space-x-4">
                        <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
                            <i class="bi bi-receipt-cutoff text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Total Transaksi</h3>
                            <p class="text-2xl font-bold">{{ $totalTransaksi }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-layout>
