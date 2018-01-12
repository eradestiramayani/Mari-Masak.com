<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("crudakun"); 

$simpan="INSERT INTO masakan SET 
        kd_masakan='$_POST[kd_masakan]', 
        nama_masakan='$_POST[nama_masakan]', 
        jenis_masakan='$_POST[jenis_masakan]', 
        keterangan='$_POST[keterangan]'"; 

mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=resepku.php>back</a>"; 
?>
