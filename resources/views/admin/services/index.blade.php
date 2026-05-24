<!DOCTYPE html>
<html>
<head>

    <title>Data Services</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h2>Data Layanan</h2>

        <a href="/services/create"
            class="btn btn-dark">

            Tambah

        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Durasi</th>

        </tr>

        @foreach($services as $service)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>

                @if($service->gambar)

                    <img src="{{ asset('storage/'.$service->gambar) }}"
                        width="100">

                @endif

            </td>

            <td>{{ $service->nama_layanan }}</td>

            <td>
                Rp {{ number_format($service->harga) }}
            </td>

            <td>
                {{ $service->durasi }} Menit
            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>