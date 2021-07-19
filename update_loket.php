<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_loket'];
	
	$id_loket=$_POST['id_loket'];
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$keterangan=$_POST['keterangan'];

    $result = mysqli_query($koneksi, 
	"UPDATE loket SET id_loket='$id_loket',kode='$kode',nama='$nama',keterangan='$keterangan' 
	WHERE id_loket=$id");

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "SELECT * FROM loket WHERE id_loket=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_loket = $user_data['id_loket'];
	$kode = $user_data['kode'];
	$nama = $user_data['nama'];
	$keterangan = $user_data['keterangan'];
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data </title>
</head>

<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_loket.php">
		<table border="0">
			<tr> 
				<td>ID Loket</td>
				<td><input type="text" name="id_loket" value=<?php echo $id_loket;?>></td>
			</tr>
			<tr> 
				<td>Kode</td>
				<td><input type="text" name="kode" value=<?php echo $kode;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>