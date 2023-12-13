<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body class="container mt-5">
    <div class="card">
        <div class="card-body">

            <h2 class="card-title">Form Tambah Siswa</h2>
            <form action="proses_tambah.php" method="post">
                <div class="form-group">

                    <label for="nama">Nama Siswa:</label>
                    <input type="text" name="nama" required class="form-control">
                </div>
                <br>
              
        <div class="form-group">

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select  name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            
        </div>
        <br>
        <div class="form-group">

            <label for="alamat">Alamat:</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>
        <br>
        
        <button class="btn btn-primary"type="submit">Tambah Siswa</button>
    </form>
    <br>
    <form action="laporan.php" method="post">
        <button type="submit" class="btn btn-success">Lihat Hasil PDF</button>
    </form>
</div>
</div>
</body>
</html>
