<?php
	include "koneksi.php";
	$query=mysql_query("select *from siswa",$connection)or die (mysql_error());
	echo"
		<html>
			<head>
				<title>Daftar Siswa SMK N 1 Pabelan</title>
			</head>
			<body>
				<center>
					<h1>Daftar Siswa SMK N 1 Pabelan Kabupaten Semarang<h1>
					<table border='1'>
						<tr>
							<td colspan='6'><a href='tambah.php'>Tambah Siswa</a></td>
						</tr>
						<tr>
							<td align='center'>No</td>
							<td align='center'>NIS</td>
							<td align='center'>Nama</td>
							<td align='center'>Jurusan</td>
							<td align='center'>Kelas</td>
							<td>Option</td>
						</tr>
	";
						$no = 0;
						while ($row = mysql_fetch_array($query)){
						$no = $no+1;
	echo"
						<tr>
							<td>".$no."</td>
							<td>".$row['nis']."</td>
							<td>".$row['nama']."</td>
							<td>".$row['jurusan']."</td>
							<td>".$row['kelas']."</td>
							<td>
								<a href='hapus.php?nis=".$row['nis']."'>Hapus</a> ||
								<a href='ubah.php?nis=".$row['nis']."'>Ubah</a>
							</td>
						</tr>
	";
						}
	echo"
					</table>
				</center>
			</body>
		</html>
	";
?>