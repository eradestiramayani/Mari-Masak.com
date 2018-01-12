<?php   
mysql_connect('localhost','root','');  
mysql_select_db('crudakun');  
     
$kd_masakan=$_GET['kd_masakan'];  
      
$delete="Delete from masakan Where kd_masakan='$kd_masakan'";  
      
mysql_query($delete) or die ("Error");            
echo "<h3>Data berhasil di hapus</h3>";
echo "<a href ='menuterbaru.php'>back"; 
 
     
?>  
