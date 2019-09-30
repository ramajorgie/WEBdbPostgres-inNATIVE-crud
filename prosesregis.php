<?php 


require_once'dbconnect.php';

$npm 		= $_POST['npm'];
$username	 = $_POST['username'];
$nama 			= $_POST['nama'];
$email		 = $_POST['email'];
$password 		= $_POST['password'];


$sql = "insert into registrasi (npm,username, nama, email,pass) values('$npm','$username','$nama', '$email','$password')";

$result = pg_query($db, $sql);

if(!$result){
  echo pg_last_error($db);
} else {
  echo '<script language="javascript">alert("Selamat akun Anda sudah aktif!"); document.location="index.php";</script>';
}

// Close the connection
pg_close($db);
?>