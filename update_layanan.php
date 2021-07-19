
<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_layanan'];
	
	$id_layanan=$_POST['id_layanan'];
	$kategori=$_POST['kategori'];
	
	$result = mysqli_query($koneksi, 
	"UPDATE pelayanan SET id_layanan='$id_layanan',kategori='$kategori' 
	WHERE id_layanan=$id");
	
	header("Location: index.php");
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM pelayanan WHERE id_layanan=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_layanan = $user_data['id_layanan'];
	$kategori = $user_data['kategori'];
}
?>
<html>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_layanan.php">
		<table border="0">
			<tr> 
				<td>ID Layanan</td>
				<td><input type="text" name="id_layanan" value=<?php echo $id_layanan;?>></td>
			</tr>
			<tr> 
				<td>Kategori</td>
				<td><input type="text" name="kategori" value=<?php echo $kategori;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>