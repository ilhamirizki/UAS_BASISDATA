<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM antrian WHERE id_antrian = '{$id}'");

    header('location: index.php');

?>