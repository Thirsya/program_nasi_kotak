<div class="container">
    <h2>Selamat Datang Calon Peserta Digital Talent</h2>
    <hr>
    <?php
    if (isset($_GET['notif'])) {
        echo "Pendaftaran berhasil";
    } else {
    ?>
        <p>Silahkan pilih <b>Menu Daftar Baru</b> untuk melakukan pendaftaran</p>
    <?php
    }
    ?>
</div>
