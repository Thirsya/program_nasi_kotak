<?php  
include'../koneksi.php';
    $idtransaksi = $_GET['idtransaksi'];
    $idanggota = $_GET['idanggota'];
    $idbuku = $_GET['idbuku'];
    $tglpinjam = $_GET['tglpinjam'];
    $tglkembali = $_GET['tglkembali'];

    $sql = "INSERT INTO tbbuku
            VALUES('$idtransaksi', '$idanggota', '$idbuku', '$tglpinjam', '$tglkembali')";

    if(mysqli_query($db, $sql)){
            echo '<script language="javascript">';
            echo 'alert("Data berhasil ditambahkan");';
            echo ' window.location = "index.php?p=transaksi-peminjaman";';
            echo '</script>';
    } else {
        echo "<p>Data gagal ditambahkan<br></p>" . mysqli_error($db);
    }

    mysqli_close($db); 
    
?>
