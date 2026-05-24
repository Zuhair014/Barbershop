<x-app-layout>

    <div class="py-12 bg-gray-100 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

                <h1 class="text-3xl font-bold mb-3">

                    Dashboard Admin Barbershop

                </h1>

                <p class="text-gray-600 mb-8">

                    Selamat datang di sistem manajemen barbershop modern.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <div class="bg-black text-white p-6 rounded-xl shadow-lg">

                        <h2 class="text-xl font-bold">

                            Data Layanan

                        </h2>

                        <p class="mt-2 text-3xl font-bold">

                            {{ \App\Models\Service::count() }}

                        </p>

                    </div>

                    <div class="bg-yellow-600 text-white p-6 rounded-xl shadow-lg">

                        <h2 class="text-xl font-bold">

                            Data Barber

                        </h2>

                        <p class="mt-2 text-3xl font-bold">

                            {{ \App\Models\Barber::count() }}

                        </p>

                    </div>

                    <div class="bg-green-600 text-white p-6 rounded-xl shadow-lg">

                        <h2 class="text-xl font-bold">

                            Total Booking

                        </h2>

                        <p class="mt-2 text-3xl font-bold">

                            {{ \App\Models\Booking::count() }}

                        </p>

                    </div>

                </div>

                <div class="mt-10">

                    <h2 class="text-2xl font-bold mb-4">

                        Menu Admin

                    </h2>

                    <div class="flex flex-wrap gap-4">

                        <a href="/services"
                            class="bg-black text-white px-6 py-3 rounded-lg shadow hover:bg-gray-800">

                            Kelola Layanan

                        </a>

                        <a href="/barbers"
                            class="bg-yellow-600 text-white px-6 py-3 rounded-lg shadow hover:bg-yellow-700">

                            Kelola Barber

                        </a>

                        <a href="/booking"
                            class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700">

                            Kelola Booking

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>