<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- Script menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>


</head>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Script menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');

            mobileMenuButton.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
            });
        });
    </script>
</head>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Script menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const closeSidebarButton = document.getElementById('close-sidebar-button');
            const sidebar = document.getElementById('sidebar');

            // Toggle sidebar visibility
            mobileMenuButton.addEventListener('click', function() {
                sidebar.classList.remove('-translate-x-full');
            });

            // Close sidebar
            closeSidebarButton.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
            });
        });
    </script>
</head>


<body class="antialiased bg-gray-100">

    <!-- Wrapper -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside id="sidebar"
            class="transform -translate-x-full fixed z-20 inset-y-0 left-0 w-64 bg-gray-800 text-white transition duration-300 ease-in-out sm:translate-x-0 sm:relative sm:z-auto">
            <div class="flex flex-col h-full">
                <!-- Header -->
                <div class="flex items-center justify-between h-16 px-4 bg-gray-900">
                    <span class="text-xl font-semibold">Invis</span>
                    <!-- Close button for mobile -->
                    <button id="close-sidebar-button" class="text-white sm:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menu -->
                <nav class="flex-1 px-2 py-4">
                    <a href="/"
                        class="flex items-center my-3 px-4 py-2 text-sm font-medium rounded hover:bg-gray-700 {{ request()->is('/') ? 'bg-gray-700' : '' }}">
                        Dashboard
                    </a>
                    <a href="/products"
                        class="flex items-center my-3 px-4 py-2 text-sm font-medium rounded hover:bg-gray-700 {{ request()->is('products') ? 'bg-gray-700' : '' }}">
                        Products
                    </a>
                    <a href="/suppliers"
                        class="flex items-center my-3 px-4 py-2 text-sm font-medium rounded hover:bg-gray-700 {{ request()->is('suppliers') ? 'bg-gray-700' : '' }}">
                        Suppliers
                    </a>
                </nav>

                <!-- Footer -->
                <div class="px-4 py-4">
                    @if (Auth::check())
                        <a href="{{ url('logout') }}"
                            class="block w-full px-4 py-2 text-center text-sm font-medium text-white bg-red-500 rounded hover:bg-red-600">
                            Logout
                        </a>
                    @else
                        <a href="{{ url('login') }}"
                            class="block w-full px-4 py-2 mb-2 text-center text-sm font-medium text-gray-900 bg-white rounded hover:bg-gray-200">
                            Login
                        </a>
                        <a href="{{ url('register') }}"
                            class="block w-full px-4 py-2 text-center text-sm font-medium text-white bg-indigo-500 rounded hover:bg-indigo-600">
                            Register
                        </a>
                    @endif
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Navbar (visible only on mobile) -->
            <header class="flex items-center justify-between px-4 py-2 bg-gray-800 sm:hidden">
                <button id="mobile-menu-button" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <span class="text-lg font-semibold text-white">Invis</span>
            </header>

            <!-- Content -->
            <main class="flex-1 bg-gray-100">
                <div class="px-4 py-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>


</html>
