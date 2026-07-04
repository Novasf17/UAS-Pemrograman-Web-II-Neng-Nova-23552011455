<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Penerbit</label>
            <input type="text" name="penerbit" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun_terbit" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>