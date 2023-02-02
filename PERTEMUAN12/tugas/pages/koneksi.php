<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_mhs";

    $db = mysqli_connect($server, $user, $pass, $database);

    if (!$db) {
        echo "koneksi gagal".mysqli_connect_error();
    }
?>
