<?php include("koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sistem Antrian</title>
        <link rel="stylesheet" href="style1.css">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <br>
    <body>
        <header>
            <h1><center>Data Antrian</center></h1>
        </header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-success'>					
						<div class='panel-heading'>
            <a class="fa fa-home" style="font-size: 24px;" href="index.php">Home</a>
            </div>

						<a class='btn btn-info' href='print.php' target="_blank">
						<i class="glyphicon glyphicon-print"></i> print</a>
						
						<div class='panel-body'>
							<center>
								<h3></h3>
								<h3>Laporan Data</h3>
								<p>&nbsp;</p>
							</center>

							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th><center>ID Antrian</center></th>
								  <th><center>ID Layanan</center></th>
								  <th><center>kode</center></th>
								  <th><center>Tanggal</center></th>
								  <th><center>Waktu panggil</center></th>
								  <th><center>Waktu selesai</center></th>
								</tr>
							  </thead>
							  <tbody> 
                  <?php
                    include 'koneksi.php';
                    $sql = 'SELECT * FROM  antrian';
                    $query = mysqli_query($koneksi, $sql);
                    while ($row = mysqli_fetch_array($query))
                    {
                        ?>
                    <tbody>
                        <tr>
                            <td><center><?php echo $row['id_antrian']?></center></td>
                            <td><center><?php echo $row['id_layanan']?></center></td>
                            <td><center><?php echo $row['kode']?></center></td>
                            <td><center><?php echo $row['tanggal']?></center></td>
                            <td><center><?php echo $row['w_panggil']?></center></td>
                            <td><center><?php echo $row['w_selesai']?></center></td>
                        </tr>
                    </tbody>
                    <?php 
                    }
                  ?>
                </tbody>
              </table><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>