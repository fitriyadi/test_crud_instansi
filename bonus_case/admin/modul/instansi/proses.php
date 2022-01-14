<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_instansi 
		(instansi,deskripsi) 
		VALUES (?,?)");

	$stmt->bind_param("ss", 
		$_POST['instansi'],
		$_POST['deskripsi']);	
	
	if ($stmt->execute()) { 
		echo "<script>alert('Data instansi berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=instansi/data';</script>";	
	} else {
		echo "<script>alert('Data instansi Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_instansi  SET 
		instansi=?,
		deskripsi=?
		where idinstansi=?");
	$stmt->bind_param("sss",
		$_POST['instansi'],
		$_POST['deskripsi'],
		$_POST['idinstansi']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data instansi berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=instansi/data';</script>";	
	} else {
		echo "<script>alert('Data instansi Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_instansi where idinstansi=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data instansi Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=instansi/data';</script>";	
	} else {
		echo "<script>alert('Data instansi Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>