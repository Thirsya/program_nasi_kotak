<html>
<head>
    <title>Membuat Form Input PHP</title>
    <style>
        div {padding: 4px};
    </style>
</head>
<body>
        <form action="proses.php" method="GET">
            <div>
                <label>Nama Produk:</label> <br>
                <input name="nama" type="text">
            </div>
            <div>
                <label>Harga :</label> <br>
                <input name="harga" type="text">
            </div>
            <div>
                <input type="submit" value="Simpan">
            </div>
        </form>
</body>
</html>