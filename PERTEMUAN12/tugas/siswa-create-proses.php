<?php
    include 'pages/koneksi.php';
    include 'index.php';
    $nama_siswa = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $agama = $_GET['agama'];
    $sekolah_asal = $_GET['sekolah'];

    $sql = "INSERT INTO siswa 
            VALUES(0 , '$nama_siswa', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    if(mysqli_query($db, $sql)){
        echo "<p style='margin-left:220px;'>Data berhasil ditambahkan</p>";
    } else {
        echo "<p style='margin-left:220px;'>Data gagal ditambahkan<br></p>" . mysqli_error($connect);
    }

    mysqli_close($db);    
?>
