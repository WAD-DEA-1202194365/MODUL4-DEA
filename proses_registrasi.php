<?php

require 'config.php';

function registrasi($request)
{
    global $conn;
    $nama = $request['nama'];
    $email = strtolower($request['email']);
    $no_hp = $request['no_hp'];
    $password = mysqli_real_escape_string($conn, $request['password']);
    $passwordConfirm = mysqli_real_escape_string($conn, $request['passwordConfirm']);

    $emailCek = "SELECT email FROM user WHERE email='$email'";
    $select = mysqli_query($conn, $emailCek);


    $result = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> alert ('username sudah ada')</script>";
        return false;
    }
    //cek konfirmasi password
    if ($password != $passwordConfirm) {
        echo " <script> 
    alert('konfirmasi password tidak sesuai')
    </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email', '$password', '$no_hp')");

    return mysqli_affected_rows($conn);
}

$_SESSION['message'] = 'Email sudah terdaftar';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        header("Location: login.php");
    } else {
        echo mysqli_error($conn);
    }
}