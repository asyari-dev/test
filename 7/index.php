<?php 
error_reporting(0);
include_once "koneksi.php";
?>
<html>

<head>
    <title>Program Crud Sederhana</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="navbar bg-primary">
            <h2 class="text-white"><b>Aplikasi CRUD SEDERHANA</b></h2>
            <a href="index.php" class="nav-item btn btn-success">Lihat Buku</a>
            <a href="?page=tambah_kategori" class="nav-item btn btn-warning"> Tambah kategori</a>
            <a href="?page=tambah_buku" class="nav-item btn btn-danger">Tambah buku</a>
        </div>
    </div>

    <div class="container">

        <?php
$page = $_REQUEST['page'];
if ($page!='') {
 include $page.".php";
}else{
include "beranda.php";
}
?>
    </div>
    <div class="mt-5" align=center>Lisensi program <a href="">achmad fadkur asyari</a> copyright &copy; <a><?=date('Y')?></a></div>
</body>

</html>