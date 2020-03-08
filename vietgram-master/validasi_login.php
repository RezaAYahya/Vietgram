<?php

/* 
  NOTE:
	USERNAME ANGGAPAN PRIMARY KEY BERARTI TIDAK ADA USERNAME YANG SAMA
*/

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$data_akun = mysqli_query($conn,"select * from akun where username='$username' and password='$password'");

$cek = mysqli_num_rows($data_akun);
 
if($cek == 1){
	$data_profil = mysqli_query($conn,"select * from profile where username='$username'");
	$row_akun = mysqli_fetch_array($data_profil);
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION["name"] = $row_akun["name"];
	$_SESSION["website"] = $row_akun["website"];
	$_SESSION["bio"] = $row_akun["bio"];
	$_SESSION["email"] = $row_akun["email"];
	$_SESSION["phone_number"] = $row_akun["phone_number"];
	$_SESSION["gender"] = $row_akun["gender"];
	header("location:feed.php");
} else{
	header("location:index.php");
}

?>