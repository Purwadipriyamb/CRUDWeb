<?php
	include "koneksi.php";
	
	$nis= $_GET['nis'];
		
	$query=mysql_query("delete from siswa where nis like '$nis'",
	$connection)or die (mysql_error());
	
	if ($query){
		header("location:index.php");
		}
	else{			
		echo"gagal menyimpan </br> <a href='index.php'>Kembali Ke Halaman Awal</a> </br> <a href='index.php'>Ulangi menyimpan</a>";
	}
?>