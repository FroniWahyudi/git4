<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if(tambah($_POST) > 0) {
            echo "<div style='color:green;'>Produk Berhasil ditambahkan</div>";
        } else {
            echo "<div style='color:red;'>Produk gagal!! ditambahkan</div>";
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
    <h1>Tambah data produk</h1>
    <form action="" method="post">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" required>
        <br><br>
        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" required>
        <br><br>
        <label for="stok">Stok</label>
        <input type="text" name="stok" id="stok" required>
        <br><br>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" required>
        <br><br>
        <button type="submit" name="submit">Tambah</button>
        <button><a href="index.php">Kembali</a></button>
    </form>
</body>
</html>