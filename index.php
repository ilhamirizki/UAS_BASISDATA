<?php include('koneksi.php');?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Sistem Antrian</title>
</head>
<?php include('headerr.php');?>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	<br/>
	<br/>
	<a href="logout.php">LOGOUT</a>
	<h3>Pelayanan</h3>
	<a href="add_layanan.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID Layanan</th>
				<th>Kategori</th>
				<th>MORE</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM pelayanan';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><center><?php echo $row['id_layanan'] ?></center></td>
					<td><center><?php echo $row['kategori'] ?></center></td>
					<td>
						<a class="btn btn-success" onclick="return confirm('Data akan diubah?');" href="update_layanan.php?id=<?= $row['id_layanan']; ?>">UPDATE</a>
                            <a class="btn btn-danger" onclick="return confirm('Data akan dihapus?');" href="hapus_layanan.php?id=<?= $row['id_layanan']; ?>"> DELETE</a>
		</td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Loket</h3>
	<a href="add_loket.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID Loket</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>keterangan</th>
				<th>MORE</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM loket';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><center><?php echo $row['id_loket'] ?></center></td>
					<td><center><?php echo $row['kode'] ?></center></td>
					<td><center><?php echo $row['nama'] ?></center></td>
					<td><center><?php echo $row['keterangan'] ?></center></td>
					<td>
						<a class="btn btn-success" onclick="return confirm('Data akan diubah?');" href="update_loket.php?id=<?= $row['id_loket']; ?>">UPDATE</a>
                            <a class="btn btn-danger" onclick="return confirm('Data akan dihapus?');" href="hapus_loket.php?id=<?= $row['id_loket']; ?>"> DELETE</a>
		</td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Antrian</h3>
	<a href="add_antrian.php">TAMBAH DATA BARU</a><br/><br/>
	<table>
		<thead>
			<tr>
				<th>ID Antrian</th>
				<th>ID Pelayanan</th>
				<th>kode</th>
				<th>Tanggal</th>
				<th>Waktu Panggil</th>
				<th>Waktu Selesai</th>
				<th>MORE</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM antrian';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><center><?php echo $row['id_antrian'] ?></center></td>
					<td><center><?php echo $row['id_layanan'] ?></center></td>
					<td><center><?php echo $row['kode'] ?></center></td>
					<td><center><?php echo $row['tanggal'] ?></center></td>
					<td><center><?php echo $row['w_panggil'] ?></center></td>
					<td><center><?php echo $row['w_selesai'] ?></center></td>
					<td>
						<a class="btn btn-success" onclick="return confirm('Data akan diubah?');" href="update_antrian.php?id=<?= $row['id_antrian']; ?>">UPDATE</a>
                            <a class="btn btn-danger" onclick="return confirm('Data akan dihapus?');" href="hapus_antrian.php?id=<?= $row['id_antrian']; ?>"> DELETE</a>
		</td>
				</tr>
			</tbody>
			<?php
		}
		?>
		</table>
	<br>
	<br>
	<nav><a class="btn btn-info"  href="laporan.php">CETAK</a></nav>
            <br><br>
	<footer>
		<p>&copy; 2021-Universitas Pelita Bangsa </p>
	</footer>
</body>
</html>