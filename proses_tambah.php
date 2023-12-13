<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ditambahkan</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body class="container mt-5">
    <div class="card">
    <div class="card-body text-center">

        <h2>Data telah ditambahkan</h2>
        <br>
        <a href="index.php" class="btn btn-success">Kembali ke Form Tambah Siswa<br></a>
    </div>
</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];

    $mysqli = new mysqli("localhost", "root", "", "latihan_pdf");

    $query = "INSERT INTO siswa (nama, jenis_kelamin, alamat) VALUES ('$nama', '$jenis_kelamin', '$alamat')";
    
    $result = $mysqli->query($query);


    $mysqli->close();
}
?>
