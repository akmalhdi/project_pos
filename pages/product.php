<?php

$p_query = mysqli_query($koneksi, "SELECT * FROM products");
$products = mysqli_fetch_all($p_query, MYSQLI_ASSOC);



?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Data Product
                </h3>
            </div>
            <div class="card-body">
                <div align="right">
                    <a href="?page=tambah-product" class="btn btn-primary btn-sm mb-3 mt-3">
                        <i class="bi bi-plus-circle"></i> Add Product
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tr align="center">
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Product Name</th>
                        <th>Photo</th>
                        <th>Price</th>
                        <th>Description</th>
                    </tr>
                    <?php
                    foreach ($products as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $key + 1 ?></td>
                            <td><?php echo $value['category_id'] ?></td>
                            <td><?php echo $value['product_name'] ?></td>
                            <td><?php echo $value['product_photo'] ?></td>
                            <td><?php echo "Rp." . number_format($value['product_price'], 2, ",", ".") ?></td>
                            <td><?php echo $value['product_description'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>