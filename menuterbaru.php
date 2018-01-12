
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Mari Masak</title> 
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS --> 
    <link href="css/css/bootstrap.css" rel="stylesheet">
    <link href="css/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	
</head>
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="image/logo.png" width="100px" alt="Logo"></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="home.php">Home</a></li>
			              			<li><a href="menuterbaru.php">Daftar Menu Terbaru</a></li>
									<li><a href="resepku.php">Tambah Resep</a></li>
                                     <li>
			                			<a href="logout.php">Logout</a>
			                		</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">
					<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
					  <tr bgcolor="#CCFFFF"> 
						<td><div align="center"><strong>No</strong></div></td> 
						<td><div align="center"><strong>Nama Masakan</strong></div></td> 
						<td><div align="center"><strong>Jenis Masakan</strong></div></td> 
						<td><div align="center"><strong>Keterangan</strong></div></td> 
						<td><div align="center"><strong>Action</strong></div></td> 
						
						
					  </tr> 
					  <?php 

						  mysql_connect('localhost','root',''); 
						  mysql_select_db('crudakun'); 
						
						  $tampil="select * from masakan"; 
						  $qryTampil=mysql_query($tampil); 
						  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
						  $no++ 
						 ?> 
					  
					   <tr bgcolor="#FFFFFF"> 
						<td><?php echo $kd_masakan ; ?></td> 
						<td><?php echo $dataTampil['nama_masakan']; ?></td> 
						<td><?php echo $dataTampil['jenis_masakan']; ?></td> 
						<td><?php echo $dataTampil['keterangan']; ?></td> 
						<td><div align="center"><a href="delete.php?kd_masakan=<?php echo $dataTampil['kd_masakan'] ; ?>">Delete</a> 
						<td>|<td>
						<td><a href="edit_data.php?kd_masakan=<?php echo $dataTampil['kd_masakan']; ?>">Edit </a></div></td>  

					  </tr> 
						<?php } ?> 
					</table>

				</div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			

    <div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				<div class="span3">
					
					<h3>Tentang Mari Masak.com</h3>
					<p>
						Mari Masak.com/Mamas.com merupakan sebuah situs yang menyediakan resep dan tips masakan yang sehat, hemat, dan nikmat. Mamas.com juga memberikan 
						postingan-postingan kreasi masakan terbaru dengan selalu mengedepankan kesehatan
					</p>
						
				</div>
				<!-- end: About -->

				<!-- start: Photo Stream -->
				<div class="span3">
					
					<h3>Hubungi Kami</h3>
					<br>Telp : 0721-889-111 </br>
                    Email : <a href="mailto:marimasak@gmail.com">marimasak@gmail.com</a> 
				</div>
				<!-- end: Photo Stream -->

				<div class="span6">
				
					<!-- start: Follow Us -->
					<h3>Quotes </h3>
					<p>“Aku memiliki prinsip keseimbangan untuk mencapai kehidupan yang tenteram. Yakni cinta, kesehatan, dan kemapanan” – James Thurber</p>
					<p>“Kesehatan selalu tampak berharga setelah kita kehilangannya.” – Jonathan Swift </p>
					<p>“Tidak sepatutnya seseorang merasa aman tentang dua hal : kesehatan dan kekayaan.” – Ali bin Abi Thalib</p>
				</div>
				
		</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
			<p>
				Copyright &copy; Mari Masak 2018
			</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/js/jquery-1.8.2.js"></script>
<script src="js/js/bootstrap.js"></script>
<script src="js/js/flexslider.js"></script>
<script src="js/js/carousel.js"></script>
<script src="js/js/jquery.cslider.js"></script>
<script src="js/js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>