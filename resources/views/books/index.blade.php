<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookVerse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">📚 Daftar Buku BookVerse</h2>

    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">
        Tambah Buku
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($books as $book)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->penerbit }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->stok }}</td>

            <td>

                <a href="{{ route('books.edit',$book->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('books.destroy',$book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="7" class="text-center">
                Belum ada data buku
            </td>
        </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>