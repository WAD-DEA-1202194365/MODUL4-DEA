<?php
session_start();
require 'config.php';

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email= '$email'");

    if (mysqli_num_rows($query) === 1) {


        $row = mysqli_fetch_assoc($query);
        if (password_verify($password, $row["password"])) {

            //set session
            $_SESSION["login"] = true;
            //cek remember me
            if (isset($_POST['remember'])) {
                //buat cookie

                setcookie('apa', $row['id'], time() + 60);
                setcookie('ini', hash('sha256', $row['email']), time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;

    if (isset($error)) {
        echo "error";
    }
}