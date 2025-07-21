<!-- Sidebar -->
<aside class="fixed top-[88px] inset-y-0 left-0 z-40 w-64 bg-white border-r shadow-md hidden md:block">
    <div class="p-4">
        <nav class="space-y-2">
            <a href="/dashboard-admin"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-house"></i>
                Dashboard
            </a>
            <a href="/dashboard-admin/tickets"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard/tickets*') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-ticket-detailed"></i>
                Data Ticket
            </a>
            <a href="/dashboard-admin/transactions"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard/transactions*') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-file-earmark"></i>
                Data Order
            </a>
            <a href="/dashboard-admin/profile"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard/profile*') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-person-badge-fill"></i>
                Profile
            </a>
            <form action="/logout" method="POST" class="px-4">
                @csrf
                <button type="submit"
                    class="flex items-center gap-2 w-full py-2 rounded hover:bg-gray-100 text-left">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>
        </nav>
    </div>
</aside>

<!-- Offcanvas Sidebar for Mobile -->
<div class="md:hidden">
    <div id="sidebarMenu"
        class="fixed inset-y-0 right-0 z-50 w-64 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out"
        tabindex="-1" aria-labelledby="sidebarMenuLabel">
        <div class="p-4 flex items-center justify-between border-b">
            <h5 class="text-lg font-bold" id="sidebarMenuLabel">e-Ticket Pangandaran</h5>
            <button type="button" class="text-gray-700" onclick="document.getElementById('sidebarMenu').classList.add('translate-x-full')">
                <i class="bi bi-x-lg text-xl"></i>
            </button>
        </div>
        <div class="p-4 space-y-2">
            <a href="/dashboard"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-house"></i>
                Dashboard
            </a>
            <a href="/dashboard/data-ticket"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard/data-ticket*') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-ticket-detailed"></i>
                Data Ticket
            </a>
            <a href="/dashboard/history-ticket"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard/history-ticket') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-file-earmark"></i>
                Data Order
            </a>
            <a href="/dashboard/update-profile"
                class="flex items-center gap-2 px-4 py-2 rounded hover:bg-gray-100 {{ Request::is('dashboard/update-profile*') ? 'bg-gray-200 font-semibold' : '' }}">
                <i class="bi bi-person-badge-fill"></i>
                Update Profile
            </a>
            <form action="/logout" method="POST" class="px-1">
                @csrf
                <button type="submit"
                    class="flex items-center gap-2 w-full py-2 rounded hover:bg-gray-100 text-left">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
