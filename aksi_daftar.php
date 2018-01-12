<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("crudakun"); 

$simpan="INSERT INTO akun SET 
        ID='$_POST[ID]', 
        login='$_POST[login]', 
        password='$_POST[password]'"; 
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=index.html>back</a>"; 
?>
