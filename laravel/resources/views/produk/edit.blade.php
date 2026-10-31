<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>

    <a href="{{ route('produk.index') }}">← Kembali</a>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td>Kode Produk</td>
                <td><input type="text" name="kode_produk" value="{{ $produk->kode_produk }}" required></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" value="{{ $produk->kategori }}" required></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td><input type="text" name="merek" value="{{ $produk->merek }}" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" step="0.01" name="harga" value="{{ $produk->harga }}" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" value="{{ $produk->stok }}" required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan" rows="4">{{ $produk->keterangan }}</textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Perbarui Produk</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
