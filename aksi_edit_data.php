<?php  
    mysql_connect('localhost','root','');  
    mysql_select_db('crudakun');  
      
    $update="UPDATE masakan SET 
        nama_masakan='$_POST[nama_masakan]',
            jenis_masakan='$_POST[jenis_masakan]',  
            keterangan='$_POST[keterangan]',  
            WHERE kd_masakan='$_POST[kd_masakan]'";  
    mysql_query($update);  
      
    echo "<center>Data Berhasil Di Update<center>";  
    echo "<center><h3><a href=menuterbaru.php>Back Tampil Data</a></h3></center>";  
?>