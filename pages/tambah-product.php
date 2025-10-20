<?php

    $selectCategory = mysqli_query($koneksi, "SELECT * FROM categories");
    $categories = mysqli_fetch_all($selectCategory, MYSQLI_ASSOC);

    if(isset($_POST['simpan'])){
        $c_id = $_POST['category_id'];
        $p_name = $_POST['product_name'];
        $p_price = $_POST['product_price'];
        $p_description = $_POST['product_description'];
        $p_photo = $_FILES['product_photo'];

        $filePath = "assets/uploads/" . $p_photo['name'];
        move_uploaded_file($p_photo['tmp_name'], $filePath);

        $q_product = mysqli_query($koneksi, "INSERT INTO products (category_id, product_name, product_price, product_description, product_photo) VALUES ('$c_id', '$p_name', '$p_price', '$p_description', '$filePath')");

        if($q_product){
            header("location:?page=product&tambah=berhasil");
        }
    }

?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>
                        Add Product
                    </h3>
                </div>
            </div>
            <div class="card-body w-50">
                <div align="right">
                    <a href="?page=product" class="btn btn-primary btn-sm mt-3">Back</a>
                </div>
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label" for="">Category Name</label>
                        <select class="form-select" name="category_id" required>
                            <option value="">-- Pilih Kategori --</option>
                            <?php
                            foreach ($categories as $c) {
                            ?>
                                <option value="<?php echo $c['id'] ?>">
                                    <?php echo $c['category_name'] ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">
                            Product Name
                        </label>
                        <input type="text" class="form-control" name="product_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">
                            Photo
                        </label>
                        <input type="file" class="form-control" name="product_photo">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">
                            Product Price
                        </label>
                        <input type="number" class="form-control" name="product_price" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">
                            Product Description
                        </label>
                        <textarea type="text" class="form-control" name="product_description" cols="30" rows="5"></textarea>
                    </div>

                    <button type="submit" name="simpan" class="btn btn-primary btn-sm mt-3">Add</button>

                </form>
            </div>
        </div>
    </div>
</div>