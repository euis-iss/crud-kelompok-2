<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Daftar Produk</h1>
        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-info">
                <tr>
                    <th>Kode</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Merek</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produks as $item)
                <tr>
                    <td>{{ $item->kode_produk }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->merek }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('produk.edit',$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('produk.destroy',$item->id) }}"
                            method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
