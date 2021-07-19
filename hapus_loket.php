<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM loket WHERE id_loket = '{$id}'");

    header('location: index.php');

?>