<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-light" data-bs-theme="dark">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="haltev.php">UNIBOOKSTORE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="admin.php">Pengolahan Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="pengadaan.php">Kebutuhan Buku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
    <br><center><h2>WELCOME</h2></center>
    <div class="services">
                <div class="box">
                <a href="index.php" style="text-decoration: none; color: black;">
                    <div class="iconBx">
                        <img src="assets/utamaa.png" alt="" />
                    </div>
                    <div class="content">
                        <h2>Halaman Utama</h2>
                        <br>
                        <p>
                        menampilkan seluruh data buku dan memiliki fungsi pencarian “Nama Buku”
                        </p>
                    </div> </a>
                </div>
                <div class="box">
                <a href="admin.php" style="text-decoration: none; color: black;">
                    <div class="iconBx">
                        <img src="assets/data.png" alt="" />
                    </div>
                    <div class="content">
                        <h2>Pengolahan Data</h2>
                        <br>
                        <p>
                        untuk pegawai dalam mengelola data buku dan penerbit (add, edit, delete)
                        </p>
                    </div> </a>
                </div>
                <div class="box">
                <a href="pengadaan.php" style="text-decoration: none; color: black;">
                    <div class="iconBx">
                        <img src="assets/buku.png" alt="" />
                    </div>
                    <div class="content">
                        <h2>Kebutuhan Buku</h2>
                        <br>
                        <p>
                        laporan buku yang perlu segera dibeli 
                        (mengambil Judul Buku dan Nama Penerbit dari buku dengan sisa stok paling sedikit)
                        </p>
                    </div> </a>
                </div> 
            </div>
</body>
</html>