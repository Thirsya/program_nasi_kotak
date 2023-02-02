<?php
    include 'koneksi.php';
    include 'beranda.php';
    $no = $_GET['no'];
    $merek = $_GET['merek'];
    $warna = $_GET['warna'];
    $jumlah = $_GET['jumlah'];

    $sql = "INSERT INTO barang(no, merek, warna, jumlah)
            VALUES('$no', '$merek', '$warna', '$jumlah')";

    if(mysqli_query($connect, $sql)){
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>