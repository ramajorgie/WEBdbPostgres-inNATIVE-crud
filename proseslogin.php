<?php 

include "dbconnect.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$query = pg_query($db, "select * from admin where username='$username' and password='$password'");
$query1 = pg_query($db, "select * from registrasi where username='$username' and pass='$password'");

if(pg_num_rows($query)>0){
    // Jika false maka akan muncul alert\
     $_SESSION['status'] = "login";
    echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="tampiladmin.php";</script>';

}
if(pg_num_rows($query1)>0){
    // Jika false maka akan muncul alert\
     $_SESSION['status'] = "login";
    echo '<script language="javascript">alert("Anda berhasil Login !"); document.location="tampiluser.php";</script>';
    
    /*header('location: index.html');
    exit()*/
}
else{
    echo '<script language="javascript">alert("Tidak bisa Login !"); document.location="index.php";</script>';
   
}

?>