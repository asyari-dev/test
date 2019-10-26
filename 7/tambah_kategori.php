<form action="aksi.php?act=tambah_kategori" method="post">
    <div class="card">
        <div class="card-header">
            <h3>TAMBAH KATEGORI</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">NAMA KATEGORI</label>
                <input type="text" name="name" class="form-control" placeholder="ketikkan disini">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Tambahkan</button>
            </div>
        </div>
    </div>
</form>

<div class="card">
    <div class="card-header">
        <h3>KATEGORI</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>NO</td>
                    <td>KATEGORI</td>
                </tr>
            </thead>
            <tbody>
            <?php 
                $query = mysqli_query($kon, "SELECT * FROM categories");
                $no=0;
                while($row = mysqli_fetch_array($query)){
                    $no++;
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$row['name']?></td>
                </tr>
            <?php }?>
            </tbody>
        </table>

    </div>
</div>