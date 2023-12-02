<?php
	include "koneksi.php";
	
	$nis= $_GET['nis'];
	$nama= $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$kelas= $_POST['kelas'];
	
	$query=mysql_query("update siswa set nama='$nama', jurusan='$jurusan', kelas='$kelas' where nis like '$nis' ;",
	$connection)or die (mysql_error());
	
	if ($query){
?>	
	<script language="JavaScript">
		document.location='index.php';
	</script>
<?php
	}
?>