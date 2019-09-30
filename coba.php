<?php @session_start();
//koneksi database
include ("dbconnect.php");

$dbuser = "pemweb";
$dbpass = "rama";
$dbname = "localhost/XE";
$db = oci_connect($dbuser, $dbpass, $dbname);

if (!$db)  {
    echo "An error occurred connecting to the database"; 
    exit; 
}

$user = $_POST['Username'];
$pass = $_POST['password'];

$sql_login = "SELECT Username FROM users WHERE Username='%".$user."%'"; 

$login_stmt = oci_parse($db, $sql_login);

if(!$login_stmt)
{
    echo "An error occurred in parsing the sql string.\n"; 
    exit; 
}

oci_execute($login_stmt);

while(oci_fetch_array($login_stmt))
{
    $password = oci_result($login_stmt,"Password");
}

if ($password == "")
{
    echo 'Password = blank';
}

if ($pass == $password)
{
    echo 'Logged In';
}
else
{
    echo 'Login Failed';
}


?>

?>
