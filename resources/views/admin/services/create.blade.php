<!DOCTYPE html>
<html>
<head>

    <title>Tambah Service</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Tambah Layanan</h2>

    <form action="/services" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">

            <label>Nama Layanan</label>

            <input type="text"
                name="nama_layanan"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Harga</label>

            <input type="number"
                name="harga"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Durasi</label>

            <input type="number"
                name="durasi"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea name="deskripsi"
                class="form-control"></textarea>

        </div>

        <div class="mb-3">

            <label>Gambar</label>

            <input type="file"
                name="gambar"
                class="form-control">

        </div>

        <button class="btn btn-dark">
            Simpan
        </button>

    </form>

</div>

</body>
</html>