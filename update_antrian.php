<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_antrian'];
	
	$id_antrian=$_POST['id_antrian'];
	$id_layanan=$_POST['id_layanan'];
	$kode=$_POST['kode'];
	$tanggal=$_POST['tanggal'];
    $w_panggil=$_POST['w_panggil'];
    $w_selesai=$_POST['w_selesai'];

    $result = mysqli_query($koneksi, 
	"UPDATE antrian SET id_antrian='$id_antrian',id_layanan='$id_layanan',kode='$kode',tanggal='$tanggal',w_panggil='$w_panggil',w_selesai='$w_selesai' 
	WHERE id_antrian=$id");

	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 
$result = mysqli_query($koneksi, "SELECT * FROM antrian WHERE id_antrian=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_antrian = $user_data['id_antrian'];
	$id_layanan = $user_data['id_layanan'];
	$kode = $user_data['kode'];
	$tanggal = $user_data['tanggal'];
    $w_panggil = $user_data['w_panggil'];
    $w_selesai = $user_data['w_selesai'];
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
	
	<form name="update_user" method="post" action="update_antrian.php">
		<table border="0">
			<tr> 
				<td>ID Antrian</td>
				<td><input type="text" name="id_antrian" value=<?php echo $id_antrian;?>></td>
			</tr>
			<tr> 
				<td>ID Layanan</td>
				<td><input type="text" name="id_layanan" value=<?php echo $id_layanan;?>></td>
			</tr>
			<tr> 
				<td>kode</td>
				<td><input type="text" name="kode" value=<?php echo $kode;?>></td>
			</tr>
			<tr> 
				<td>Tanggal</td>
				<td><input type="text" name="tanggal" value=<?php echo $tanggal;?>></td>
			</tr>
            <tr> 
				<td>Panggilan pada</td>
				<td><input type="text" name="w_panggil" value=<?php echo $w_panggil;?>></td>
			</tr>
            <tr> 
				<td>Selesai Pada</td>
				<td><input type="text" name="w_selesai" value=<?php echo $w_selesai;?>></td>
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