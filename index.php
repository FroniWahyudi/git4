<?php
    require 'functions.php';
    $kotak = ambil("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <style>
       img {
        width: 100px;
       }
       table {
        width: 90%;
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0,0,0,0.1)
       }
       th, td {
        border: 1px solid #ddd;
        padding: 12px 16px;
       }
    </style>
</head>
<body>
    <h1>Toko Online</h1>
    <button><a class="button" href="tambah.php" style="text-decoration: none; color: black;">Tambah data produk</a></button><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach($kotak as $k) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $k["id"]?>">Ubah</a>
                        <a href="hapus.php?id=<?= $k["id"]; ?>">Hapus</a>
                    </td>
                    <td><img src="img/<?= $k["gambar"]; ?>"></td>
                    <td><?= $k["nama_produk"]; ?></td>
                    <td><?= $k["harga"]; ?></td>
                    <td><?= $k["stok"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>
</html>