<nav x-data="{ open: false }" class="bg-black border-b border-gray-700">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center">

                <a href="/dashboard" class="text-white text-2xl font-bold">

                    BarberShop

                </a>

            </div>

            <!-- Menu Desktop -->
            <div class="hidden sm:flex sm:items-center gap-4">

                <a href="/dashboard"
                   class="text-white hover:text-yellow-500">

                    Dashboard

                </a>

                <a href="/services"
                   class="text-white hover:text-yellow-500">

                    Services

                </a>

                <a href="/barbers"
                   class="text-white hover:text-yellow-500">

                    Barbers

                </a>

                <a href="/booking"
                   class="text-white hover:text-yellow-500">

                    Booking

                </a>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button type="submit"
                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">

                        Logout

                    </button>

                </form>

            </div>

            <!-- Mobile Button -->
            <div class="flex items-center sm:hidden">

                <button @click="open = ! open"
                    class="text-white">

                    ☰

                </button>

            </div>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="sm:hidden bg-black p-4 space-y-3">

        <a href="/dashboard" class="block text-white">

            Dashboard

        </a>

        <a href="/services" class="block text-white">

            Services

        </a>

        <a href="/barbers" class="block text-white">

            Barbers

        </a>

        <a href="/booking" class="block text-white">

            Booking

        </a>

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button type="submit"
                class="w-full bg-red-600 text-white py-2 rounded-lg">

                Logout

            </button>

        </form>

    </div>

</nav>