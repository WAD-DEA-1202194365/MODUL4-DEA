<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
setcookie('apa', '', time() - 3600);
setcookie('ini', '', time() - 3600);
header("Location:login.php");
exit;