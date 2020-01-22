<?php 
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example insert</title>
</head>

<body>
<form action="" method="GET">
		<div class="container col-8 p-2">
			<div class="row justify-content-md-left">
					<div class="jumbotron col-12 pb-2 pt-3">
						<div class="container">
							<p><b>Contact Details</b></p>
						</div>
						<div class="container pb-2">
							<div class="card">
								<div class="form-group p-2">
									<label for="Name">Your name<font color="red">*</font></label>
									<input type="text" class="form-control col-6" id="Name" placeholder="Your answer" name="Name">		
								</div>
							</div>
						</div>
						<div class="container pb-2">
							<div class="card">
								<div class="form-group p-2">
									<label for="phoneno">Phone number <font color="red">*</font></label>
									<input type="text" class="form-control col-6" id="phoneno" placeholder="Your answer" name="mobile">		
								</div>
							</div>
						</div>
						<div class="container pb-2">
							<div class="card">
								<div class="form-group p-2">
									<label for="Address">Delivery Address<font color="red">*</font></label>
									<input type="text" class="form-control col-6" id="Address" placeholder="Your answer" name="address">		
								</div>
							</div>
						</div>
						<div class="container pb-2">
							<p class="pt-2">Time of delivery <font color="red">*</font></p>
								<div class="custom-control custom-radio">
								  <input type="radio" class="custom-control-input" id="t1" name="time"  value="12:30pm to 02:30pm">
								  <label class="custom-control-label" for="t1">12:30pm to 02:30pm</label>
								</div>
								<div class="custom-control custom-radio">
								  <input type="radio" class="custom-control-input" id="t2" name="time"  value="04:00pm to 06:00pm">
								  <label class="custom-control-label" for="t2">04:00pm to 06:00pm</label>
								</div>
						</div>
						<div class="container pb-2">
							<p class="pt-2">Preferred contact method <font color="red">*</font></p>
								<!-- Default unchecked -->
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  id="check6" name="pcm1" value="Phone">
									<label class="custom-control-label" for="check6">Phone</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  id="check7" name="pcm2" value="Email">
									<label class="custom-control-label" for="check7">Email</label>
								</div>
						</div>
					</div>
			</div>
			
		</div>
	<div class="container col-8 p-4"><!--Submit-->
		<input type="submit" class="btn btn-primary" name="submit"/>
	</div>
</form>
<?php
if($_GET['submit'])
{
    $name = $_GET['Name'];
    $mobile = $_GET['mobile'];
    $address = $_GET['address'];
	$time = $_GET['time'];
	$pcm1 = $_GET['pcm1'];
	$pcm2 = $_GET['pcm2'];

    echo $name;
    echo $mobile;
    echo $address;
    echo $time;
    echo $pcm1;
    echo $pcm2;
    
    $query = "INSERT INTO subscribe VALUES ('$name','$mobile','$address','$time','$pcm1','$pcm2')";
    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "Data inserted into database";
    }


}
?>
</body>
</html>