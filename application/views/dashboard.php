<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 14 : Membuat Carousel dengan Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
</head>
<body>
 
   <div class="container">		
	<br/>
	<div class="col-md-8 col-md-offset-2">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>		
			</ol>
 
			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url();?>uploads/Tulips.jpg" width='500px' >
					<div class="carousel-caption">
						<h3>siakad.com</h3>
						
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/logopgri.jpg" width='500px'>
					<div class="carousel-caption">
						
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/Koala.jpg" width='500px'>
					<div class="carousel-caption">
						
					</div>

				</div>				
			</div>
 
			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
   </div>
</body>
</html>
