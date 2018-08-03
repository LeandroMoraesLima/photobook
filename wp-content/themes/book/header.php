<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Photobook</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   	 <?php wp_head(); ?>

   	 <link rel="stylesheet" href="<?php echo CSS; ?>/app.css?v=1">

  </head>
  <body>
  	<div class="container">        
  		<div class="row">
  			<nav class="navbar navbar-expand-lg navbar-light bg-light">
  				<a class="navbar-brand" href="#">
  					<i class="fa fa-bars"></i>
  				</a>
  				<a class="navbar-brand" href="#">
  					<img src="<?php echo IMG; ?>/Photobook2.jpg"> 
  				</a>  				
  				<div class="collapse navbar-collapse" id="navbarText">
  					<!-- <ul class="navbar-nav mr-auto">
  						<li class="nav-item active">
  							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">Features</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" href="#">Pricing</a>
  						</li>
  					</ul> -->
  				</div>
  				<div class="collapse1 navbar-collapse justify-content-end">
  					<ul class="collapse2 navbar-nav">
  						<li class="nav-item">
  							<a class="tel nav-link" href="#">+11 235 813 2134</a>
  							<a href="#">
  								<i class="fa fa-sign-in" style="font-size:40px;"></i>			
  							</a>
  						</li>
  					</ul>
  				</div>
  			</nav>  			
  		</div>
  	</div> 

  	<section class="logo" style="background-image: url('<?php echo IMG; ?>/Photobook.jpg')" >
  		<div class="container-fluid">
			<div class="titulo">
				<div class="row">
					<div class="text col-md-12 text-center">
						<h2>CREATE YOUR OWN PHOTOSTORY</h2>
						<h4>Make your photobook oline</h4>
						<a href="header.php">
							<li>MAKE YOUR PHOTOBOOK</li>
						</a>
					</div>
				</div>	  				
  			</div> 			  			
  		</div>
  	</section>

  	<section class="cardmain">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">	
	  				<div class="row">	  					  	
  						<hr>
	  					<div class="card col-md-3">	
	  						<a href="#">
		  						<img class="card1" src="<?php echo IMG; ?>/Photobook3.jpg">
		  						<h4>Download<br>photos</h4>	
	  						</a>     			
	  					</div>
	  					<div class="card col-md-3">
	  						<a href="#">	
		  						<img class="card1" src="<?php echo IMG; ?>/Photobook4.jpg">
		  						<h4>Desing your<br>photobook</h4>	
	  						</a>     			
	  					</div>
	  					<div class="card col-md-3">	
	  						<a href="#">
		  						<img class="card1" src="<?php echo IMG; ?>/Photobook5.jpg">
		  						<h4>Pay<br>for service</h4>	  
	  						</a>   			
	  					</div>
	  					<div class="card col-md-3">	
	  						<a href="#">
		  						<img class="card1" src="<?php echo IMG; ?>/Photobook6.jpg">
		  						<h4>Get your<br>photobook</h4>	
	  						</a>
	  					</div>
	  				</div>
  				</div>
     		</div>
     	</div>
     </section>

	<section class="advantage">
		<div class="container-fluid">
			<div class="row">
				<div class="advan col-md-12">	
					<h2>ADVANTAGE</h2>
					<div class="container">
						<div class="row">
							<div class="img col-md-4">	
				       		    <img class="img1" src="<?php echo IMG; ?>/Photobook7.jpg" >
				       		    <h4>Import photos<br>fron your social networks</h4>
				     			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptates est fugiat quo eveniet.</p>
			     			</div>
			     			<div class="img col-md-4">	
				       		    <img class="img1" src="<?php echo IMG; ?>/2bcc0e11960ebe99ec2c4d402328a970.gif" >
				       		    <h4>Photo editing</h4>
				     			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad esse, repellat dolorem iure eum. Dolore possimus iste, quisquam quaerat ut, assumenda consequuntur molestiae.</p>
			     			</div>
			     			<div class="img col-md-4">	
				       		    <img class="img1" src="<?php echo IMG; ?>/Photobook9.jpg" >
				       		    <h4>Templates</h4>
				     			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad esse, repellat dolorem iure eum. Dolore possimus iste, quisquam quaerat ut, assumenda consequuntur molestiae.</p>
			     			</div>	
			     		</div>
		     			<div class="button text-center">
		     				<a href="header.php">
								<li>MAKE YOUR PHOTOBOOK</li>
							</a>
		     			</div>
			     	</div>
     			</div>
			</div>
		</div>
	</section>

	<section class="ready">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Ready solutions</h2>
					<div class="row">
						<div class="col-md-4">
							<h5>LightBook</h5>
							<p>Make your LightBook</p>							
						</div>
						<div class="col-md-4">
							<h6>BESTSELLER</h6>
							<h5>ClassicBook</h5>
							<p>Make your ClassicBook</p>
						</div>
						<div class="col-md-4">
							<h5>PremiumBook</h5>
							<p>Make your PremiumBook</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

  </body>
	
</html>