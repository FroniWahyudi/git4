<?php
    require 'functions.php';
    if(hapus($_GET["id"]) > 0) {
        echo "
            <script>
                alert('Data produk Berhasil dihapus');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data produk Gagal!! dihapus');
                document.location.href = 'index.php'
            </script>
        ";
    }
?>