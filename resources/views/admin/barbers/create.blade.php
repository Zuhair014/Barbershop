<!DOCTYPE html>
<html>
<head>

    <title>Tambah Barber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Tambah Barber</h2>

    <form action="/barbers"
        method="POST"
        enctype="multipart/form-data">

        @csrf

        <div class="mb-3">

            <label>Nama Barber</label>

            <input type="text"
                name="nama_barber"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Spesialis</label>

            <input type="text"
                name="spesialis"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Jadwal</label>

            <input type="text"
                name="jadwal"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Foto</label>

            <input type="file"
                name="foto"
                class="form-control">

        </div>

        <button class="btn btn-dark">
            Simpan
        </button>

    </form>

</div>

</body>
</html>