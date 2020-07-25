<div class="container">		
	<div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>		
				<li data-target="#myCarousel" data-slide-to="3"></li>		
				<li data-target="#myCarousel" data-slide-to="4"></li>		
				<li data-target="#myCarousel" data-slide-to="5"></li>		
			</ol>
 
			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url();?>uploads/siakad3.jpg" style="max-height: 425px; max-width: 1100px; height: 500px;">
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/siakad4.jpg" style="max-height: 425px; max-width: 1100px; height: 500px;" >
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/siakad5.jpg" style="max-height: 425px; max-width: 1100px; height: 500px;" >
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/siakad6.jpg" style="max-height: 425px; max-width: 1100px; height: 500px;" >
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/siakad7.jpg" style="max-height: 425px; max-width: 1100px; height: 500px;" >
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>uploads/siakad8.jpg" style="max-height: 425px; max-width: 1100px; height: 500px;" >
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