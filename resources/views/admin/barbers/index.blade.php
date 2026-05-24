<!DOCTYPE html>
<html>
<head>

    <title>Data Barber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-3">

        <h2>Data Barber</h2>

        <a href="/barbers/create"
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
            <th>Foto</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th>Jadwal</th>
            <th>Aksi</th>

        </tr>

        @foreach($barbers as $barber)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>

                @if($barber->foto)

                    <img src="{{ asset('storage/'.$barber->foto) }}"
                        width="100">

                @endif

            </td>

            <td>{{ $barber->nama_barber }}</td>

            <td>{{ $barber->spesialis }}</td>

            <td>{{ $barber->jadwal }}</td>

            <td>

                <a href="/barbers/{{ $barber->id }}/edit"
                    class="btn btn-warning btn-sm">

                    Edit

                </a>

                <form action="/barbers/{{ $barber->id }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>