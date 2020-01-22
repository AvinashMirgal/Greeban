<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body style="background-color: #ebefea">
<a name="top"></a>
<?php include 'includes/navbar_all.php'; ?>  
<?php
	$servername = "localhost";
	$username = "id12097588_subscribe_admin";
	$password = "Subscribe123";
	$dbname = "id12097588_subscribe";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM exotic_product";
	$result = mysqli_query($conn, $sql);
	
?>
		<div class="container py-3">
    		<div class="row mt-1">
			<div class="col-12 text-center mt-5">
        		<h3>Exotic Veggis</h3>
        	</div>
<?php

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
?>
		<div class="col-md-4 mb-4 item" data-delay="10">
          <div class="card border-0 shadow">
		  	<img  src="img/<?php echo $row["image"]; ?>" class="card-img-top wow image-fluid" alt="..."  width="240" height="220">
            <div class="card-body text-center">
              <a data-toggle="modal" data-target="#<?php echo $row["id_name"]; ?>" href="#"  class="stretched-link"><?php echo $row["name"] ?></a>
            </div>
          </div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="<?php echo $row["id_name"]; ?>" role="dialog">
			<div class="modal-dialog modal-lg modal-dialog-centered">
			
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><?php echo $row["name"]; ?></h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6">
								<img src="img/<?php echo $row["image"]; ?>">
							</div>
							<div class="col-lg-6">
								<h5><?php echo $row["Desc"]; ?></h5>
								<p>Available @15Rs</p>
								<div class="text-center m-0 d-flex  justify-content-center pt-5">
									<p class="lead justify-content-end"><button class="btn btn-primary btn-lg" onclick=" window.open('https://docs.google.com/forms/d/e/1FAIpQLSfzr97QyA1kyNtQN0PHbyhKC3mjoJG_OTgIUuRRI-t9hHebmw/viewform','_blank')"> Subscribe</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			
			</div>
  		</div>

<?php
		
	}

} else {
	echo "0 results";
}
?>
</div>
</div>
<?php

mysqli_close($conn);
?>
		<div class="text-center m-0 d-flex  justify-content-center">
       		<p class="lead justify-content-center"><a class="btn btn-primary btn-lg" href="#top">Top</a></p>
   		</div>
		  
  <?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>