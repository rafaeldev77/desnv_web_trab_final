<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == 'usuario_teste' && $password == 'senha123') {

    header("Location: fale_conosco.html");
    exit();
} else {

    header("Location: login.html");
    exit();
}
?>
