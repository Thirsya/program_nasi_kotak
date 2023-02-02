<?php
    include "koneksi.php";

    $no = $_GET['no'];
    $nama_merek = $_GET['merek'];
    $warna = $_GET['warna'];
    $jumlah = $_GET['jumlah'];

      $query = "UPDATE barang SET no ='$no', nama_merek = '$merek', warna = '$warna', jumlah = '$jumlah' WHERE no = '$no'";
      $result = mysqli_query($connect, $query);
      if(!$result){
        echo "<script>alert('Data gagal diubah.');window.location='index.php';</script>";
      } else {
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
                
     
?>

    