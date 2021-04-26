<?php
//memualai session php
session_start();

//membuat koneksi
include 'conn.php';

//membuat variable
$username = $_POST['username'];
$password = $_POST['password'];

//query sql untuk mengambil data pada database tabel admin
$sql= mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

//cek data dengan menghitung data pada tabel
$cek= mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:tampilkontak.php");
    //jika username dan password benar akan menuju ke halaman tampilkontak.php
}
else {
    header("location:index.php");
    //jika salah tetap dihalaman index.php
}
?>