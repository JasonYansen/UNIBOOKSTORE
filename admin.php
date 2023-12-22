<!DOCTYPE html>
<?php
include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM buku");
$sqlPenerbit = mysqli_query($conn,"SELECT nama FROM penerbit");

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
        <h2>Data Buku</h2>
        <table class="table table-striped table-bordered">
            <tr class="text-center">
                <th>ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Penerbit</th>
                <th>Action</th>
            </tr>
            <?php
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
                    <td> <?php echo "Rp" . $harga ?></td>
                    <td> <?php echo $stok ?></td>
                    <td> <?php echo $penerbit ?></td>
                    <td class="d-flex flex-wrap justify-content-center gap-2"> <a href="edit.php?id=<?= $id ?>"><button type="button" class="btn btn-primary">Edit</button></a> <a href="delete.php?id=<?= $id ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>


            <?php } ?>
        </table>

        <h2>Tambah Data Buku</h2>

        <form class="row g-3" method="post" action="insert.php">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">ID Buku</label>
                <input name="idBuku" type="text" maxlength="5" style="text-transform: uppercase;" class="form-control" id="validationCustom01" required >
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Kategori</label>
                <input name="kategori" type="text" class="form-control" id="validationCustom02"  required>

            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Nama Buku</label>
                <div class="input-group">
                    <input name="namaBuku" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"  required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Harga</label>
                <div class="input-group">
                    <span class="input-group-text">Rp</span>
                    <input name="harga" type="text" class="form-control" id="validationCustom03" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom05" class="form-label">Stok</label>
                <input name="stok" type="text" class="form-control" id="validationCustom05" required>

            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Penerbit</label>
                <select name="penerbit" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <?php
                    while ($data = mysqli_fetch_array($sqlPenerbit)) { ?>
                        <option class="text-dark" value="<?= $data['nama'] ?>"><?php echo $data['nama'] ?></option>

                    <?php } ?>
                </select>

            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>