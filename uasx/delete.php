<?php
    include 'koneksi.php';

    $id=$_GET['id'];

    mysqli_query($conn,"delete from mahasiswa where id='$id'");

    header("location:read.php");
?>

