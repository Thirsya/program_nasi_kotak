<!DOCTYPE html>
<html>

<head>
    <style>
        label {
            width: 150px;
        }

        .form-control,
        textarea,
        select {
            width: 750px;
        }

        tr {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Peserta</h2>
        <form action="siswa-create-proses.php" method="GET">
            <table>
                <tr>
                    <td><label class="mt-3" for="nama">Nama</label></td>
                    <td><input class="form-control mt-3" type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><label class="mt-3" for="alamat">Alamat</label></td>
                    <td><textarea class="form-control mt-3" name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td><label class="mt-3" for="jenis_kelamin">Jenis Kelamin</label></td>
                    <td><input class="mt-3" type="radio" name="jenis_kelamin" value="L">Laki-laki <br>
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td><label class="mt-3" for="agama">Agama</label></td>
                    <td><select class="form-control mt-3" name="agama">
                            <option disabled selected>Pilih salah satu</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select></td>
                </tr>
                <tr> 
                    <td><label class="mt-3" for="sekolah">Sekolah Asal</label></td>
                    <td><input class="form-control mt-3" type="text" name="sekolah"></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input class="mt-3 btn btn-primary" type="submit" value="Simpan" name="simpan">
                        <input type="reset" class="mt-3 btn btn-info" value="Reset">
                        <a href="index.php"><input type="button" class="mt-3 btn btn-success" value="Kembali"></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>