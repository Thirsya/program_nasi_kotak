<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaran</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-body pt-1" style="font-size: 20px;" href="index.php?p=beranda">DIGITAL TALENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="index.php?p=siswa">Pendaftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="index.php?p=siswa-create">Daftar Baru</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container mt-4">
        <?php
        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
            $p = $_GET['p'];
            if (in_array($p . ".php" , $pages)) {
                include($pages_dir. "/" .$p.  ".php");
            } else {
                echo "Halaman Tidak Ditemukan";
            }
        } else {
            include("beranda.php");
        }
        ?>
    </section>

</body>

</html>
