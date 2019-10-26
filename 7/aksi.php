<?php
require_once "koneksi.php";
$act = $_REQUEST['act'];

if($act=='tambah_buku'){
    $name = $_REQUEST['name'];
    $categori_id = $_REQUEST['categori_id'];
    $deskripsi = $_REQUEST['deskripsi'];
    $stok = $_REQUEST['stok'];
    $image = $_REQUEST['image'];

    $query = mysqli_query($kon,"INSERT INTO books VALUE('','$name','$stok','$image','$deskripsi','$categori_id')");
    if($query){
        echo "<script>
            alert('Buku berhasil di tambahkan');
            window.location='index.php';
        </script>";
    }
}

if($act=='tambah_kategori'){
    $name = $_REQUEST['name'];
    $query = mysqli_query($kon,"INSERT INTO categories VALUE('','$name')");
    var_dump($query);
    if($query){
        echo "<script>
            alert('Kategori berhasil di tambahkan');
            window.location='index.php?page=tambah_kategori';
        </script>";
    }
}

if($act=='pinjam'){
    $id = $_REQUEST['id']; 
    $get_stok = mysqli_query($kon,"SELECT * FROM books WHERE id = '$id'");
    $stoks = mysqli_fetch_assoc($get_stok);
    $stok = $stoks['stok']-1;
    $query = mysqli_query($kon,"UPDATE books SET stok = '$stok' WHERE id ='$id'");
    if($query){
        echo "<script>
            alert('Buku berhasil dipinjam');
            window.location='index.php';
        </script>";
    }
}

if($act=='kembalikan'){
    $id = $_REQUEST['id']; 
    $get_stok = mysqli_query($kon,"SELECT * FROM books WHERE id = '$id'");
    $stoks = mysqli_fetch_assoc($get_stok);
    $stok = $stoks['stok']+1;
    $query = mysqli_query($kon,"UPDATE books SET stok = '$stok' WHERE id ='$id'");
    if($query){
        echo "<script>
            alert('Buku berhasil di kembalikan');
            window.location='index.php';
        </script>";
    }
}
