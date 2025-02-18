
<?php
if(isset($_POST['category'])) {
    $category= $_POST['category'];
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];

   $query = mysqli_query($koneksi, "INSERT INTO categories(id,category,user_id) values('$id','$category','$user_id')");

    if($query) {
        echo '<script>alert("ubah Data Berhasil")</script>';
    }else{
        echo '<script>alert("ubah Data Gagal")</script>';
    }
}

?>



<div class="container-fluid">
    <h1 class="mt-4">categories</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">categories</li>
    </ol>

    <a href="?page=categories" class="btn btn-danger">Kembali</a>
    <hr>

    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">category</td>
                <td width="1">:</td>
                <td><input class="form-control" value="<?php echo $data['category']; ?>" type="text" name="category"></td>
            </tr>

            <tr>
                <td>id</td>
                <td>:</td>
                <td><input class="form-control" value="<?php echo $data['id']; ?>" type="number" step="0.01" name="id"></td>
            </tr>

            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input class="form-control" value="<?php echo $data['user_id']; ?>" type="number" step="1" name="user_id"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>
