<!DOCTYPE html>
<html>
<head>

    <title>Edit Service</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h2>Edit Layanan</h2>

    <form action="/services/{{ $service->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Layanan</label>

            <input type="text"
                name="nama_layanan"
                value="{{ $service->nama_layanan }}"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Harga</label>

            <input type="number"
                name="harga"
                value="{{ $service->harga }}"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Durasi</label>

            <input type="number"
                name="durasi"
                value="{{ $service->durasi }}"
                class="form-control">

        </div>

        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea name="deskripsi"
                class="form-control">{{ $service->deskripsi }}</textarea>

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>