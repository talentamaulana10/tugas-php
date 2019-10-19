<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$postlog = mysqli_query($koneksi,"INSERT INTO log_users (username) VALUES('$username')");
$data = mysqli_query($koneksi, "SELECT * FROM table_user WHERE username='$username' and password='$password' ");

$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}
else{
    header("location:login.php?pesan=gagal");
}
?>