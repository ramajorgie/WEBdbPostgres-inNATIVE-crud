<?php
include "dbconnect.php";

$data = $_POST['fungsi'];
$tes = $data;
$sql = "DELETE FROM registrasi WHERE npm = '$tes'";
$conn = pg_query($db, $sql);
header('location: viewdelete.php');
?>