<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <a href="{{ route('produk.index') }}">← Kembali</a>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf

        <table>
            <tr>
                <td>Kode Produk</td>
                <td><input type="text" name="kode_produk" required></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" required></td>
            </tr>
            <tr>
                <td>Merek</td>
                <td><input type="text" name="merek" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan" rows="4"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan Produk</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
