<?php include("koneksi.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
    <br>
		<header>
    <h1><center>Data Antrian</center></h1>
    <p>&nbsp;</p>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-success'>					
						<div class='panel-heading'>Data Antrian</div>
            <table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th><center>ID Antrian</center></th>
								  <th><center>ID Layanan</center></th>
								  <th><center>Kode</center></th>
								  <th><center>Tanggal</center></th>
								  <th><center>Waktu Panggil</center></th>
								  <th><center>Waktu Selesai</center></th>
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
                    <script>
                      window.print();
                    </script>
                    <?php 
                    }
                  ?>
                </tbody>
              </table>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>