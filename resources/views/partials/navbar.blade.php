<nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">

            {{-- Kiri: Logo + menu utama --}}
            <div class="flex items-center gap-6">
                <a href="{{ route(auth()->user()->dashboardRoute()) }}"
                   class="font-bold text-lg text-indigo-600">
                    Web Kelas
                </a>

                <div class="hidden md:flex items-center gap-1">
                    <a href="{{ route(auth()->user()->dashboardRoute()) }}"
                       class="px-3 py-2 rounded text-sm hover:bg-gray-100 {{ request()->routeIs('dashboard.*') ? 'bg-indigo-50 text-indigo-700 font-medium' : 'text-gray-700' }}">
                        Dashboard
                    </a>

                </div>
            </div>

            {{-- Kanan: info user + logout --}}
            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <div class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</div>
                    <div class="text-xs text-gray-500">{{ auth()->user()->level_label }}</div>
                </div>

                <div class="h-9 w-9 rounded-full bg-indigo-600 text-white flex items-center justify-center font-semibold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <form method="POST" action="{{ route('logout') }}" class="hidden md:block">
                    @csrf
                    <button class="text-sm text-red-600 hover:text-red-700 hover:underline">
                        Logout
                    </button>
                </form>

                {{-- Tombol menu mobile --}}
                <button type="button" class="md:hidden p-2 rounded hover:bg-gray-100"
                        onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                        aria-label="Buka menu">
                    <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Menu mobile --}}
        <div id="mobile-menu" class="hidden md:hidden pb-3 pt-2 border-t space-y-1">
            <a href="{{ route(auth()->user()->dashboardRoute()) }}"
               class="block px-3 py-2 rounded text-sm bg-gray-100 text-gray-700">
                Dashboard
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="block w-full text-left px-3 py-2 rounded text-sm text-red-600 hover:bg-red-50">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>