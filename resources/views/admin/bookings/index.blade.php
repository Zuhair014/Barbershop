<!DOCTYPE html>
<html>
<head>

    <title>Data Booking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Data Booking</h2>

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>User</th>
            <th>Layanan</th>
            <th>Barber</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>

        </tr>

        @foreach($bookings as $booking)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $booking->user->name }}</td>

            <td>{{ $booking->service->nama_layanan }}</td>

            <td>{{ $booking->barber->nama_barber }}</td>

            <td>{{ $booking->tanggal_booking }}</td>

            <td>{{ $booking->jam_booking }}</td>

            <td>{{ $booking->status }}</td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>