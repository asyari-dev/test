<?php

$query = mysqli_query($kon, "SELECT * FROM categories");
     while ($row = mysqli_fetch_array($query)) {
        $q = mysqli_query($kon, "SELECT * FROM books where categori_id='".$row['id']."'");
?>
<br>
<div class="row">
<div class="col-12">
<div class="alert alert-success">Kategori <b><?=$row['name']?></b></div>
</div>
<?php

     while ($r = mysqli_fetch_array($q)) {
?>
    <div class="col-3">
        <div class="card">
            <img src="<?=$r['image']?>" alt="no-image" style="width:100%; max-height:200px; height:200px;">
        </div>
        <div class="row">
            <div class="col-8"><b><?=$r['name']?></b></div>
            <div class="col-4">Stok : <?=$r['stok']?></div>
            <div class="col-6"><a href="aksi.php?act=pinjam&id=<?=$r['id']?>" class="btn btn-block btn-<?=($r['stok']==0)?'default': 'primary'?> <?=($r['stok']==0)?'disabled': ''?>"><?=($r['stok']==0)?'Stok Habis': 'Pinjam'?></a></div>
            <div class="col-6"><a  href="aksi.php?act=kembalikan&id=<?=$r['id']?>" class="btn btn-block btn-success">Kembalikan</a></div>
        </div>
    </div>
    <?php } ?>

</div>
<?php } ?>