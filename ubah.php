<?php
	include "koneksi.php";
	$nis = $_GET['nis'];
	$query=mysql_query("select *from siswa where nis='$nis'",$connection)or die (mysql_error());
	while($row=mysql_fetch_array($query)){
	$nama = $row['nama'];
	$jurusan = $row['jurusan'];
	$kelas = $row['kelas'];
	echo"
		<html>
			<head>
				<title>Tambah Siswa</title>
			</head>
			<body>
				<form action='perubahan.php?nis=$nis' method='POST'>
				<center>
					<table border='1'>
						<tr>
							<td>Nis</td>
							<td>:</td>
							<td>$nis</td>
						<tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type='text' name='nama' size='45' value='$nama'></td>
						<tr>
						<tr>
							<td>Jurusan</td>
							<td>:</td>
							<td>
								<select name='jurusan'>
									<option>$jurusan</option>
									<option>RPL</option>
									<option>TSM</option>
									<option>TKR</option>
									<option>TB</option>
								</select>
							</td>
						<tr>
						<tr>
							<td>Kelas</td>
							<td>:</td>
							<td>
								<select name='kelas'>
									<option>$kelas</option>
									<option>X RPL 1</option>
									<option>X RPL 2</option>
									<option>XI RPL 1</option>
									<option>XI RPL 2</option>
									<option>XII RPL</option>
									<option>X TSM 1</option>
									<option>X TSM 2</option>
									<option>XI TSM 1</option>
									<option>XI TSM 2</option>
									<option>XII TSM</option>
									<option>X TKR 1</option>
									<option>X TKR 2</option>
									<option>XI TKR 1</option>
									<option>XI TKR 2</option>
									<option>XII TKR</option>
									<option>X TB 1</option>
									<option>X TB 2</option>
									<option>XI TB 1</option>
									<option>XI TB 2</option>
									<option>XII TB</option>
								</select>								
							</td>
						<tr>
						<tr>
							<td align='center'><a href='index.php'>Cancle</td>
							<td></td>
							<td align='right'><input type='submit' value='Simpan'/></td>
						</tr>
					</table>
				</center>
				</form>
			</body>
		</html>
	";
	}
?>