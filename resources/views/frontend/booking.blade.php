<!DOCTYPE html>
<html>
<head>

    <title>Booking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Booking Barbershop</h2>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <form action="/booking" method="POST">

        @csrf

        <div class="mb-3">

            <label>Pilih Layanan</label>

            <select name="service_id"
                class="form-control">

                @foreach($services as $service)

                    <option value="{{ $service->id }}">

                        {{ $service->nama_layanan }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Pilih Barber</label>

            <select name="barber_id"
                class="form-control">

                @foreach($barbers as $barber)

                    <option value="{{ $barber->id }}">

                        {{ $barber->nama_barber }}

                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Tanggal Booking</label>

            <input type="date"
                name="tanggal_booking"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Jam Booking</label>

            <input type="time"
                name="jam_booking"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Catatan</label>

            <textarea name="catatan"
                class="form-control"></textarea>

        </div>

        <button class="btn btn-dark">
            Booking Sekarang
        </button>

    </form>

</div>

</body>
</html>