<?php
    include ("koneksi.php");

    $no = $_GET['no'];
    $nama_merek = $_GET['merek'];
    $warna = $_GET['warna'];
    $jumlah = $_GET['jumlah'];

    $sql = "INSERT INTO barang VALUES('$no', '$merek', '$warna', '$jumlah')";

    if(mysqli_query($connect, $sql)){
        echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambah.');window.location='tambahBarang.php';</script>";
    }
?>