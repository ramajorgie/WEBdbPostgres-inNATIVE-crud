<!DOCTYPE html>
<html>
<head>
	<title>SUKSES</title>
</head>
<body>
<table border="2" cellpading="5" cellspacing="5">
<tr><td><center><b>npm</center></td>
<td><center><b>username</center></td>
<td><center><b>nama</center></td>
<td><center><b>email</center></td>
<td><center><b>password</center></td>
<td><center><b>Action</center></td>
<?php
include "dbconnect.php";

$sql="SELECT * FROM registrasi";

$hasil=pg_exec($db,$sql);

while($data=pg_fetch_array($hasil)){
?>

<tr>
<td><center><?php echo $data['npm']?></center></td>
<td><center><?php echo $data['username']?></center></td>
<td><center><?php echo $data['nama']?></center></td>
<td><center><?php echo $data['email']?></center></td>
<td><center><?php echo $data['pass']?></center></td>
<form action="delete.php">
<td><center><input type="submit" name="submit" value="Delete" ></center></td>
</form>
</tr>

<?php
}
?>
</table>
</body>
</html>