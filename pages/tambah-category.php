<?php
// require_once "config/koneksi.php";

$id = isset($_GET['edit']) ? $_GET['edit'] : "";
$selectCategory = mysqli_query($koneksi, "SELECT category_name FROM categories WHERE id='$id'");
$category = mysqli_fetch_assoc($selectCategory);

if (isset($_POST['update'])) {
    $category_name = $_POST['category_name'];
    $update = mysqli_query($koneksi, "UPDATE categories SET category_name='$category_name' WHERE id='$id' ");
    header("location:?page=category&ubah=berhasil");
}

if (isset($_POST['simpan'])) {
    $category_name =  $_POST['category_name'];
    $insert = mysqli_query($koneksi, "INSERT INTO categories (category_name) VALUES ('$category_name')");

    header("location:?page=category&tambah=berhasil");
}

?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3><?php echo isset($_GET['edit']) ? 'Update' : 'Add' ?> Category</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Category Name</label>
                            <input class="form-control" type="text" name="category_name" value="<?php echo $category['category_name'] ?? "" ?>" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary btn-sm" type="submit" 
                            name="<?php echo isset($_GET['edit']) ? 'update' : 'simpan' ?>">
                            <?php echo isset($_GET['edit']) ? 'Edit' : 'Create' ?>
                            </button>
                            <a href="?page=category" class="btn btn-primary btn-sm">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>