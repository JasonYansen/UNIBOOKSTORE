<?php
include 'koneksi.php';


    $id = strtoupper($_POST['idBuku']);
    $kategori = $_POST['kategori'];
    $namaBuku = $_POST['namaBuku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $penerbit = $_POST['penerbit'];


    $checkQuery = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id'");
    if(mysqli_num_rows($checkQuery) > 0){
        echo "<script>
                alert('Error: Data buku ada yang sama');
                window.location.href='admin.php';
              </script>";
    } else {
        $sql = mysqli_query($conn,"INSERT INTO buku (`id_buku`, `kategori`, `nama`, `harga`, `stok`, `penerbit`) VALUES ('$id','$kategori','$namaBuku','$harga','$stok','$penerbit')");
    
        if($sql){
            header("location: admin.php");
        } else {
            echo "<script>
                    alert('Error: Tidak bisa menambahkan buku');
                    window.location.href='admin.php';
                  </script>";
        }
    }
?>