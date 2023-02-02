<!DOCTYPE html>
<html>
<head>
    <style>
        tr,th,td {
            padding-left: 10px;
            padding-top: 4px;
            padding-bottom: 4px;
            height: 10px;
            font-size: 15px;
        }
        .btn {
            padding: 0px 2px 0px 2px;
            border-radius: 5px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    
    <div>
        <br><h2">Pendaftar</h2>
        <hr>
        <a class="btn btn-warning font-weight-bold" href="index.php?p=siswa-create">Tambah Baru</a>
        <table class="table-bordered table-striped table-hover">
            <tr class="bg-dark text-white">
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Tindakan</th>
            </tr>

            <?php
            include "koneksi.php";
            $nomor = 1;
            $query = "SELECT * FROM siswa";
            $q_tampil_siswa = mysqli_query($db, $query);
            if (mysqli_num_rows($q_tampil_siswa) > 0) {
                while ($r_tampil_siswa = mysqli_fetch_array($q_tampil_siswa)) {
            ?>
                    <tr>
                        <td style="width: 50px;"><?php echo $r_tampil_siswa['id_siswa'] ?></td>
                        <td style="width: 190px;"><?php echo $r_tampil_siswa['nama_siswa'] ?></td>
                        <td style="width: 200px;"><?php echo $r_tampil_siswa['alamat'] ?></td>
                        <td style="width: 160px;"><?php if ($r_tampil_siswa['jenis_kelamin'] == 'L') {
                                                        echo 'Laki-laki';
                                                    } else {
                                                        echo 'Perempuan';
                                                    } ?></td>
                        <td style="width: 90px;"><?php echo $r_tampil_siswa['agama'] ?></td>
                        <td style="width: 230px;"><?php echo $r_tampil_siswa['sekolah_asal'] ?></td>
                        <td style="width: 100px;">
                            <a class="btn btn-warning font-weight-bold" href="index.php?p=siswa-edit&id=<?=$r_tampil_siswa['id_siswa']?>">Edit</a>
                            <a class="btn btn-danger font-weight-bold" onclick = "if (! confirm('Yakin hapus data ini ?')) { return false; }" href="delete.php?id=<?=$r_tampil_siswa['id_siswa']?>">Delete</a>
                        </td>
                    </tr>
            <?php 
                }
            } else {
                echo "<tr>Data Tidak Ditemukan</tr>";
            }
            ?>
        </table>
        <?php
    include 'koneksi.php';
    $data_siswa = mysqli_query($db,"SELECT * FROM siswa");
    $jumlah_siswa = mysqli_num_rows($data_siswa);
    ?>
 
    <p>Jumlah : <b><?php echo $jumlah_siswa; ?></b></p>
    </div>
</body>
</html>
