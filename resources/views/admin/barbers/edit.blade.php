<!DOCTYPE html>
<html>
<head>

    <title>Edit Barber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Edit Barber</h2>

    <form action="/barbers/{{ $barber->id }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Barber</label>

            <input type="text"
                name="nama_barber"
                value="{{ $barber->nama_barber }}"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Spesialis</label>

            <input type="text"
                name="spesialis"
                value="{{ $barber->spesialis }}"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Jadwal</label>

            <input type="text"
                name="jadwal"
                value="{{ $barber->jadwal }}"
                class="form-control">

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>