<form action="aksi.php?act=tambah_buku" method="post">
<div class="card">
    <div class="card-header">
        <h3>TAMBAH BUKU</h3>
    </div>
    <div class="card-body">
    <div class="form-group">
        <label for="">NAMA BUKU</label>
        <input type="text" name="name" class="form-control" placeholder="ketikkan disini">
    </div>
    <div class="form-group">
        <label for="">KATEGORI</label>
        <select name="categori_id" id="" class="form-control">

        <?php $query = mysqli_query($kon, "SELECT * FROM categories");
            while ($row = mysqli_fetch_array($query)) {
        ?>

        <option value="<?=$row['id']?>"><?=$row['name']?></option>


     <?php }?>


        </select>
    </div>
    <div class="form-group">
        <label for="">STOK</label>
        <input type="number" name="stok" class="form-control" placeholder="ketikkan disini">
    </div>
    <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">url Image</label>
        <input name="image" class="form-control" >
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-success">Tambahkan</button>
    </div>
    </div>
</div>
</form>
