<?php
    $koneksi = mysqli_connect("localhost", "root","", "tokoonline");

    function ambil($data) {
        global $koneksi;
        $lemari = mysqli_query($koneksi,$data);
        $kotak = [];
        while($isiLemari = mysqli_fetch_assoc($lemari)) {
            $kotak[] = $isiLemari;
        }
        return $kotak;
    }


    function tambah($data) {
        global $koneksi;
        $namaProduk = $data["nama_produk"];
        $harga = $data["harga"];
        $stok = $data["stok"];
        $gambar = $data["gambar"];

        $perintah = ("INSERT INTO produk VALUES (
                    '','$namaProduk','$harga','$stok','$gambar'    
        );");

        mysqli_query($koneksi,$perintah);
        return mysqli_affected_rows($koneksi);
    }


    function hapus($data) {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM produk WHERE id = $data");
        return mysqli_affected_rows($koneksi);
    }

    function ubah($data) {
        global $koneksi;
        $id = $data["id"];
        $namaProduk = $data["nama_produk"];
        $harga = $data["harga"];
        $stok = $data["stok"];
        $gambar = $data["gambar"];

        $perintah = ("UPDATE produk SET 
                    nama_produk = '$namaProduk',
                    harga = '$harga',
                    stok = '$stok',
                    gambar = '$gambar'    
                    WHERE id = $id");

        mysqli_query($koneksi,$perintah);
        return mysqli_affected_rows($koneksi);
    }
?>