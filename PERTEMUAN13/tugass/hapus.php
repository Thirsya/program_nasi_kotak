<?php
    include "koneksi.php";

    $no = $_GET['no'];

    $query = "DELETE FROM merek WHERE no = '$no'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
?>
    <a href="index.php"> Lihat data </a>
<?php
    }
    else{
        echo "<script>alert('Data gagal dihapus.');window.location='index.php';</script>" . mysqli_error($connect);
    }
?>