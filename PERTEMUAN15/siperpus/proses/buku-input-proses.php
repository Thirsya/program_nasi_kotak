<?php  
include'../koneksi.php';
    $idbuku = $_GET['idbuku'];
    $judulbuku = $_GET['judulbuku'];
    $kategori = $_GET['kategori'];
    $pengarang = $_GET['pengarang'];
    $penerbit = $_GET['penerbit'];
    $status = $_GET['status'];

    $sql = "INSERT INTO tbbuku
            VALUES('$idbuku', '$judulbuku', '$kategori', '$pengarang', '$penerbit', '$status')";

    if(mysqli_query($db, $sql)){
            echo '<script language="javascript">';
            echo 'alert("Data berhasil ditambahkan");';
            echo ' window.location = "index.php?p=buku";';
            echo '</script>';
    } else {
        echo "<p>Data gagal ditambahkan<br></p>" . mysqli_error($db);
    }

    mysqli_close($db); 
    header("location:../index.php?p=buku");   
?>
