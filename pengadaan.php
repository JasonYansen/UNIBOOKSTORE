<!DOCTYPE html>
<?php
include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT nama,penerbit,stok FROM buku ORDER BY stok ASC");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
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

    <main class="container py-3 d-flex flex-column justify-content-center align-items-center table-responsive">
        <h2>Data Buku Dari Stok Paling Sedikit</h2>
        <!-- Membuat tabel untuk menampilkan data buku -->
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>Nama Buku</th>
                <th>Penerbit</th>
                <th>Stok Buku</th>
            </tr>
            <?php
            // Loop untuk mengambil data dari database
            while ($data = mysqli_fetch_array($sql)) {
                $namaBuku = $data['nama'];
                $penerbit = $data['penerbit'];
                $stok = $data['stok'];
            ?>
                <tr>
                    <td> <?php echo $namaBuku ?></td>
                    <td> <?php echo $penerbit ?></td>
                    <td class="text-center"> <?php echo $stok ?></td>
                </tr>


            <?php } ?>
        </table>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>