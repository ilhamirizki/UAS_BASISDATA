<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM pelayanan WHERE id_layanan = '{$id}'");

    header('location: index.php');

?>