<?php
	include "koneksi.php";
	
	$nis= $_POST['nis'];
	$nama= $_POST['nama'];
	$jurusan= $_POST['jurusan'];
	$kelas= $_POST['kelas'];
	
	$query=mysql_query("insert into siswa values('$nis','$nama','$jurusan','$kelas');",
	$connection)or die (mysql_error());
	
	if ($query){
?>	
	<script language="JavaScript">
		document.location='index.php';
	</script>
<?php
	}
?>