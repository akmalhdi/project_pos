<?php
require_once "koneksi.php";


$id = isset($_GET['edit']) ? $_GET['edit'] : "";
$queryEdit = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['update'])) {
    // $_POST
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($password) {
        $query = mysqli_query($koneksi, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id'");
    } else {
        $query = mysqli_query($koneksi, "UPDATE users SET name='$name', email='$email' WHERE id='$id'");
    }

    if ($query) {
        header("location:user.php?ubah=berhasil");
    }
}

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_id = 3;

    $query = mysqli_query($koneksi, "INSERT INTO users (name, email, password, role_id) values ('$name', '$email', '$password', '$role_id')");

    if ($query) {
        header("location:user.php?tambah=berhasil");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>

<body>
    <h3>Edit</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Name* </label>
            <br>
            <input type="text" name="name" class="" placeholder="Enter your name" required value="<?php echo $rowEdit['name'] ?? '' ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="">Email* </label>
            <br>
            <input type="email" name="email" class="" placeholder="Enter your email" required value="<?php echo $rowEdit['email'] ?? '' ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="">Password* <small>Kosongkan jika tidak ingin mengubah</small></label>
            <br>
            <input type="password" name="password" class="" placeholder="Enter your password">
        </div>
        <br>
        <div class="form-group">
            <button type="submit" name="<?php echo ($id) ? 'update' : 'simpan' ?>">
                <?php echo ($id) ? 'Simpan Perubahan' : 'Simpan' ?>
            </button>
        </div>
    </form>
</body>

</html>