<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_loket.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID Loket</td>
				<td><input type="text" name="id_loket"></td>
			</tr>
			<tr> 
				<td>kode</td>
				<td><input type="text" name="kode"></td>
			</tr>
            <tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr> 
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_loket = $_POST['id_loket'];
		$kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $keterangan = $_POST['keterangan'];
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO loket (id_loket,kode,nama,keterangan) 
        VALUES('$id_loket','$kode','$nama','$keterangan')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>