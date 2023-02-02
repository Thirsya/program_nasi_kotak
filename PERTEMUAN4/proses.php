<?php
    include "koneksi.php";
    $nama = $_GET['nama'];
    $harga = $_GET['harga'];
    $sql = "INSERT INTO produk(nama_produk, harga)
    VALUES('$nama', '$harga')";
    if(mysqli_query($connect, $sql)){
    echo "Data berhasil ditambahkan";
    } else {
    echo "Data gagal ditambahkan<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>