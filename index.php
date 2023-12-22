<!DOCTYPE html>
<?php
include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM buku");

if (isset($_GET['search'])) {

    $search = str_replace("+", " ", $_GET['search']);
    $sqlSearch = mysqli_query($conn, "SELECT * FROM buku WHERE nama LIKE '%$search%'");
}
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
        <!-- Membuat bagian utama dengan desain responsif -->
    <div class="d-flex w-100 justify-content-end">
        <!-- Membuat form pencarian -->
        <form id="searchForm" class="d-flex" role="search" method="get" action="index.php">
            <!-- Input untuk pencarian buku -->
            <input class="form-control me-2" type="search" placeholder="Cari Nama Buku" aria-label="Search" name="search" autocomplete="off">
            <!-- Tombol untuk menjalankan pencarian -->
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <br>
    <table class="table table-striped table-bordered">
        <!-- Membuat header tabel -->
            <tr>
                <th>ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Penerbit</th>
            </tr>
            <?php
            // Mengecek apakah pencarian dilakukan atau tidak
            if (!isset($_GET['search']) || $_GET['search'] == '') {


                while ($data = mysqli_fetch_array($sql)) {
                    $id = $data['id_buku'];
                    $kategori = $data['kategori'];
                    $namaBuku = $data['nama'];
                    $harga = $data['harga'];
                    $stok = $data['stok'];
                    $penerbit = $data['penerbit'];
            ?>
                    <tr>
                        <td> <?php echo $id ?></td>
                        <td> <?php echo $kategori ?></td>
                        <td> <?php echo $namaBuku ?></td>
                        <td> <?php echo $harga ?></td>
                        <td> <?php echo $stok ?></td>
                        <td> <?php echo $penerbit ?></td>
                    </tr>


                <?php } ?>
        </table>
        <?php } else {
                while ($data = mysqli_fetch_array($sqlSearch)) {
                    $id = $data['id_buku'];
                    $kategori = $data['kategori'];
                    $namaBuku = $data['nama'];
                    $harga = $data['harga'];
                    $stok = $data['stok'];
                    $penerbit = $data['penerbit'];
        ?>
            <tr>
                <td> <?php echo $id ?></td>
                <td> <?php echo $kategori ?></td>
                <td> <?php echo $namaBuku ?></td>
                <td> <?php echo $harga ?></td>
                <td> <?php echo $stok ?></td>
                <td> <?php echo $penerbit ?></td>
            </tr>

        <?php } ?>
        </table>
    <?php } ?>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.getElementById('searchForm').addEventListener('submit', () => {
            const userSearch = document.querySelector('[name="search"]').value

            if (userSearch !== '') {
                this.action = "index.php?search=" + userSearch
            } else {
                this.action = "index.php"
            }

            console.log(userSearch)
        })
    </script>
</body>

</html>