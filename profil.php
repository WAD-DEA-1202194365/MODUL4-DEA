<?php

include('config.php');
$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id = '$id'";
$select = mysqli_query($conn, $query);
$display = mysqli_fetch_assoc($select);

session_start();
if (!isset($_SESSION["login"])) {
    header("Location:./login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary p-1 fw-bolder">
        <div class="container-fluid">
            <a class="navbar-brand" href="login.php">ERD Travel</a>
            <div class="align-self-end">
                <div class="navbar-nav">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink">
                                    Booking
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item text-center" href="#">Booking</a></li>
                                    <li><a class="dropdown-item text-center" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-center" href="./keluar.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 150px" ;>
        <div class="card">
            <h2 class="fw-bold text-center mt-4">Profil</h2>
            <div class="card-body pt-1">
                <form action="update.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Id</label>
                        <input type="text" class="form-control rounded" id="id" name="id"
                            value="<?= $selects['id']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan Alamat E-mail">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama"
                            value="<?= $display['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label fw-bold">Nomor Handphone</label>
                        <input type="text" min="10" class="form-control" id="no_hp" name="no_hp"
                            value="<?= $display['no_hp']; ?>">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="noHp" class="form-label fw-bold">Kata Sandi</label>
                        <input type="text" min="10" class="form-control" id="password" name="password"
                            value="<?= $display['password']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                        <input type="text" min="10" class="form-control" id="passwordConfirm" name="passwordConfirm"
                            value="<?= $display['passwordConfirm']; ?>">
                    </div>
                    <div class="mb-3 row">
                        <button class="btn btn-primary px-5 col-6" type="submit" name="edit">Simpan</button>
                        <button class="btn btn-warning px-5 col-6" type="close" name="keluar">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>