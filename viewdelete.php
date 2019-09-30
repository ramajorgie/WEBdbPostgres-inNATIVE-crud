<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:100%; height:475px;">
<form action="delete.php" method="POST">
<table align="center" border="1" id="datatable1" style="width: 80%;" class="table">

                    <thead align="center">
                      <tr class="head">
                        <th>No</th>
                            <th>NPM</th> 
                             <th>USERNAME</th>
                              <th>NAMA</th>       
                              <th >EMAIL</th>
                             <th>PASSWORD</th>
                             <th>Action</th>
    </tr>
 </thead>
 <?php
    include "dbconnect.php";

    $Cari="SELECT * FROM registrasi";
    $Tampil = pg_query($db,$Cari);
    $nomer=0;
    while ( $hasil = pg_fetch_array ($Tampil)) {
            $npm             = stripslashes ($hasil['npm']);
            $username    = stripslashes ($hasil['username']);
            $nama          = stripslashes ($hasil['nama']);
            $email              = stripslashes ($hasil['email']);
            $password              = stripslashes ($hasil['pass']);
        {
    $nomer++;
?>
  <tr>
        <td><?=$nomer?></td>
        <td><?=$npm?></td>
        <td><?=$username?></td>
        <td><?=$nama?></td>
        <td><?=$email?></td>
        <td><?=$password?></td>
        <td align="center"><button  type="sumbit" name="fungsi" value="<?=$npm?>">DEL</button></td>
  </tr>
   <?php  
        }
    }

?>
</table>
</form>