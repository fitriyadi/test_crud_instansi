<?php
ob_start();
session_start();
require_once 'setting/koneksi.php';
require_once 'setting/crud.php';

$user=$_POST['username'];
$pass=$_POST['password']; 

//Pengecekan ada data dalam login tidak
$sqladmin="Select iduser from tb_user where username='$user' and password='$pass'";


if (_cekData($mysqli,$sqladmin)== true){
	//JIka data ditemukan
	$_SESSION['admin']=_dataCustom($mysqli,$sqladmin);
	echo "<script>alert('Anda login sebagai Admin')</script>";
	echo "<script>window.location='admin/index.php?hal=dashboard';</script>";

}else{
		//Jika tidak ditemukan
	echo "<script>alert('Username atau password tidak terdaftar')</script>";
	echo "<script>window.location='index.php';</script>";
	
}

?>