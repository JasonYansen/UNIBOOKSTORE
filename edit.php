<!DOCTYPE html>
<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id'");

while($data = mysqli_fetch_array($sql)){
    $kategori = $data['kategori'];
    $namaBuku = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $penerbit = $data['penerbit'];
}

$sqlPenerbit = mysqli_query($conn,"SELECT nama FROM penerbit");


if(isset($_POST['penerbit'])){
    $kategoriUpdate = $_POST['kategori'];
    $namaBukuUpdate = $_POST['namaBuku'];
    $hargaUpdate = $_POST['harga'];
    $stokUpdate = $_POST['stok'];
    $penerbitUpdate = $_POST['penerbit'];

    $sqlUpdate = "UPDATE buku SET kategori = '$kategoriUpdate',nama = '$namaBukuUpdate',harga = '$hargaUpdate',stok = '$stokUpdate', penerbit = '$penerbitUpdate' WHERE id_buku = '$id'";
    
    if (mysqli_query($conn,$sqlUpdate)) {
        header("location: admin.php");
    }else echo "error";
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
        <a class="navbar-brand" href="haltev.php">Haltev</a>
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

    <main class="container pt-5 d-flex flex-column justify-content-center align-items-center">
        <form class="row g-3" method="post" action="edit.php?id=<?=$id?>">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">ID Buku</label>
                <input name="idBuku" type="text" class="form-control" id="validationCustom01" value="<?=$id?>" required disabled>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Kategori</label>
                <input name="kategori" type="text" class="form-control" id="validationCustom02" value="<?=$kategori?>" required>
               
            </div>
            <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Nama Buku</label>
                <div class="input-group">
                    <input name="namaBuku" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?=$namaBuku?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Harga</label>
                <input name="harga" type="text" class="form-control" id="validationCustom03" value="<?=$harga?>" required>
               
            </div>
            <div class="col-md-4">
                <label for="validationCustom05" class="form-label">Stok</label>
                <input name="stok" type="text" class="form-control" id="validationCustom05" value="<?=$stok?>" required>
               
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Penerbit</label>
                <select name="penerbit" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <?php 
                        while ($data = mysqli_fetch_array($sqlPenerbit)) { ?>
                            <option class="text-dark" value="<?=$data['nama']?>" <?php if($penerbit == $data['nama']) echo "selected" ?>     ><?php echo $data['nama']?></option>

                    <?php } ?>
                </select>
                
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>

    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>