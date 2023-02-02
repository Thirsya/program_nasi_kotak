<?php
    include 'pages/koneksi.php';
    $nama_siswa = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $agama = $_GET['agama'];
    $sekolah_asal = $_GET['sekolah'];

    $sql = "INSERT INTO siswa 
            VALUES(0 , '$nama_siswa', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    if(mysqli_query($db, $sql)){
            echo '<script language="javascript">';
echo 'alert("Data berhasil ditambahkan");';
echo ' window.location = "index.php?p=siswa";';
echo '</script>';
    } else {
        echo "<p>Data gagal ditambahkan<br></p>" . mysqli_error($connect);
    }

    mysqli_close($db);    
?><!-- 
<a href="index.php"><input type="button" class="mt-3 btn btn-success" value="Kembali"></a> -->
