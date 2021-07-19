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
 
	<form action="add_antrian.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID Antrian</td>
				<td><input type="text" name="id_antrian"></td>
			</tr>
			<tr> 
				<td>ID Layanan</td>
				<td><input type="text" name="id_layanan"></td>
			</tr>
            <tr> 
				<td>kode</td>
				<td><input type="text" name="kode"></td>
			</tr>
            <tr> 
				<td>Tanggal</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
            <tr> 
				<td>Panggilan pada :</td>
				<td><input type="text" name="w_panggil"></td>
			</tr>
            <tr> 
				<td>Selesai pada :</td>
				<td><input type="text" name="w_selesai"></td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_antrian = $_POST['id_antrian'];
		$id_layanan = $_POST['id_layanan'];
        $kode = $_POST['kode'];
        $tanggal = $_POST['tanggal'];
        $w_panggil = $_POST['w_panggil'];
        $w_selesai = $_POST['w_selesai'];
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO antrian (id_antrian,id_layanan,kode,tanggal,w_panggil,w_selesai) 
        VALUES('$id_antrian','$id_layanan','$kode','$tanggal','$w_panggil','$w_selesai)");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>