<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/navbar.php'; ?>
<section class="first"  width="500" height="500">
  <div class="container"> 
	<h1 class="text-center text-light">We're Good. Just ask our moms.</h1>
  </div>
</section>
<div class="container">	
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Things are looking up</h2>
				<p class="lead">Indoor vertical farming shines a new light on the way we do food. Our farms use 99% less land and 95% less water to grow pesticide-free and non-GMO crops. All this in service of healthier plants, people and planet.</p>
			</div>
		</div>
	</div>

	<!--- Image Slider -->
	<div id="demo" class="carousel slide mr-4" data-ride="carousel">
	  <!-- Indicators -->
	  <ul class="carousel-indicators">
    	<li data-target="#demo" data-slide-to="0" class="active"></li>
    	<li data-target="#demo" data-slide-to="1"></li>
    	<li data-target="#demo" data-slide-to="2"></li>
  	  </ul>
		<div class="carousel-inner ml-3 mr-10">
			<div class="carousel-item active"><img src="img/Scrollview4.webp" class="img-fluid"></div>
			<div class="carousel-item"><img  src="img/Scrollview5.webp" class="img-fluid"></div>
			<div class="carousel-item"><img src="img/Scrollview6.webp" class="img-fluid"></div>
		</div>
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    		<span class="carousel-control-prev-icon"></span>
  		  </a>
  		  <a class="carousel-control-next" href="#demo" data-slide="next">
   			 <span class="carousel-control-next-icon"></span>
  		</a>
	</div>
	<!--- End Image Slider -->




	<!--- Start Jumbotron -->
	<div class="jumbotron mr-2 ml-3">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">BUILT WITH THE BEST</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<h3>Next level freshness</h3>
						<p>Our produce tastes freshly picked because it is. With farms that are located right in your community, Plenty ensures fresh, flavorful produce.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<h3>Taste you can trust</h3>
						<p>Our innovative farms allow us to cultivate crops without GMOs or pesticides. You know. The way it used to be.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<h3>Nature meets nurture</h3>
						<p>Our plants are nurtured in controlled environments, helping each plant thrive and live their best lives.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<h3>Available year round</h3>
						<p>Because we grow indoors, our flavorful crops are always in season. So you can have your kale and eat it too!</p>
					</div>
				</div>
			</div>
			<div class="text-center m-0 d-flex  justify-content-center">
       <p class="lead justify-content-end"><a class="btn btn-primary btn-lg" href="https://docs.google.com/forms/d/e/1FAIpQLSfzr97QyA1kyNtQN0PHbyhKC3mjoJG_OTgIUuRRI-t9hHebmw/viewform"><i class="fa fa-long-arrow-up"></i>Subscribe</a></p>
   </div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">We're taking action.</h3>
				<p class="lead">Closing the global nutrition gap by providing Plenty for all™ may seem ambitious. We know. But we’re biting off more than we can chew because planet-first produce has never tasted so good.</p>
			</div>
			<div class="col-md-4"><img class="img-fluid" src="img/Scrollview3.webp"></div>
		</div>
	</div>
	<!--- End Two Column Section -->
	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>