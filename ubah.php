<?php
    require 'functions.php';

    $id = $_GET["id"];

    $pd = ambil("SELECT*FROM produk WHERE id = $id")[0];

    if(isset($_POST["submit"])) {
        if(ubah($_POST) > 0) {
            echo "<div style='color:green;'>Produk Berhasil diubah</div>";
        } else {
            echo "<div style='color:red;'>Produk gagal!! diubah/div>";
            echo mysqli_error($koneksi);
        }
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ubah data produk</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?= $pd["id"]?>">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" required value="<?= $pd["nama_produk"]?>">
        <br><br>
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" required value="<?= $pd["harga"]?>">
        <br><br>
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" required value="<?= $pd["stok"]?>">
        <br><br>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" required value="<?= $pd["gambar"]?>">
        <br><br>
        <button type="submit" name="submit">Ubah</button>
        <button><a href="index.php">Kembali</a></button>
    </form>
</body>
</html>