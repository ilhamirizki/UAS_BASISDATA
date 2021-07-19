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
 
	<form action="add_layanan.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID Layanan</td>
				<td><input type="text" name="id_layanan"></td>
			</tr>
			<tr> 
				<td>kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_layanan = $_POST['id_layanan'];
		$kategori = $_POST['kategori'];
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO pelayanan (id_layanan,kategori) 
        VALUES('$id_layanan','$kategori')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>