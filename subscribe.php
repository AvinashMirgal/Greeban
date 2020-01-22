<?php 
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    .box{
        display: none;
    }
    .ExoticGreen .Microgreen .Micro-Exotic{ background: #fff; }
</style>
  <script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
</head>
<body>
<form action="" method="GET">
	<div class="container col-8"><!--Form Header-->
		<div class="row justify-content-center">
				<div class="jumbotron text-center jumbotron-fluid pb-3 pt-3">
					<div class="container">
						<h1 class="text-align:center">MixBox-Monthly Subscription Form</h1>
						<p>We value your time. This form won't take more than 3 minutes.After you fill out this order request, we will contact you for confirmation and availability before the order is completed. Once order placed won't be canceled as we grow as per the orders only to avoid wastage & maintain the freshness. Mix Box contains a mix of handpicked greens. We deliver in Mumbai, Navi Mumbai & Thane only.  For any further details please feel free to contact us at <a href="info@greeban.com">info@greeban.com</a></p>
						<p class="text" align="left"><font color="red">*Required</font></p>
					</div>			
				</div>
		</div>
	</div>
	<div class="container col-8"><!--email-->
		<div class="card">
			<div class="form-group p-2">
				<label for="email">Email address<font color="red">*</font></label>
				<input type="email" class="form-control col-6" id="email" placeholder="Enter email" name="email">		
			</div>
		</div>
	</div>
	<div class="container col-8 p-2"><!--About Greeban Fresh-->
		<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-3 pt-3">
					<div class="container">
					<p>About Greeban Fresh</p>
					<p>Greeban Fresh is one of India’s First Vertical farms!</br>We aim to provide consumers with the freshest possible produce of microgreens and exotic veggies.</br></br>To fulfill this commitment, we use advanced hydroponic techniques to maintain the best quality of our produce.</br></br>About Hydroponics: Hydroponics is a subset of hydroculture, which is a method of growing plants without soil by using mineral nutrient solutions in a water solvent. This technique can produce one of the best quality while using 80% less water than traditional farming.</br></br>How are we different?</br></br>Our plants are grown in a closed insulated temperature-controlled room.</br></br>Growing the same quality and quantity all year round.</br></br>Growing in the city - our produce is local, fresh and secure.</br></br>The water we use is RO filtered.</br></br>A perfect mix of nutrients is used to maintain the original flavor of our produce.</br></br>When there’s soil there’s pests. When there’s pests there’s pesticides. When there’s pesticides there’s a problem.</br>No soil. No pest. No pesticide. No problem!</br></br>Pesticide free - Fungicide free - Weedicide free - Non GMO - Local - Fresh & Secure.</p>
					</div>
				</div>
		</div>
	</div>
	<div class="container col-8 p-1"><!--Multiple options to choose from-->
	<div class="row justify-content-md-left">
			<div class="jumbotron col-12 pb-3 pt-3">
				<div class="container">
				<p>Multiple options to choose from!</p>
				<p>Serving the Freshest Possible Produce! We grow fresh greens only as per your requirement & harvest them just 15 minutes before dispatch on the day of delivery. Each box contains a mix of greens of your choice.</br></br>ExoticGreen MixBox(250gm)</br>Weekly: 4 Boxes a month: Rs. 1,199/-</br>Bi-Weekly: 8 Boxes a month: Rs. 1,999/-</br></br>Microgreen MixBox (100gm)</br>Weekly: 4 Boxes a month: Rs. 1,199/-</br>Bi-Weekly: 8 Boxes a month: Rs. 1,999/-</br></br>Micro-Exotic ComboBox(250gm)</br>Weekly: 4 Boxes a month: Rs. 1,199/-</br>Bi-Weekly: 8 Boxes a month: Rs. 1,999/-</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container col-8"><!--Choose box-->
		<div class="card">
			<div class="form-group p-2">
				<label for="exampleFormControlSelect1">Make Your Choice! <font color="red">*</font></label>
				<select class="custom-select" name="ProductType">
				<option>Choose</option>
				<option value="ExoticGreen" name="ExoticGreen">ExoticGreen MixBox</option>
				<option value="Microgreen" name="Microgreen">Microgreen MixBox</option>
				<option value="Micro-Exotic" name="Micro-Exotic">Micro-Exotic ComboBox</option>
				</select>
			</div>
		</div>
	</div>

	<div class="ExoticGreen box"><!--ExoticGreen BOX-->
		<div class="container col-8 p-2">
			<div class="row justify-content-md-left">
					<div class="jumbotron col-12 pb-3 pt-3">
						<div class="container">
							<p>ExoticGreen MixBox</p>
							<p>Serving the Freshest Possible Produce! We grow fresh greens only as per your requirement & harvest them just 15 minutes before dispatch on the day of delivery. Each box weighs 250 grams having a mix of ExoticGreens of your choice.</p>
						</div>
					</div>
			</div>
			<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-3 pt-3">
					<div class="container">
					<p>Choice of Box <font color="red">*</font></p>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="check1" name="Exo1" value="Exo1">
						<label class="custom-control-label" for="check1">Exo1 (Lettuce Iceberg, Lettuce Romaine, Genovese Basil, Thai Basil, Purple Basil, Celery, Dill leaves, Parsley, Arugula, Thyme))</label>
					</div>
					
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="check2" name="Exo2" value="Exo2">
						<label class="custom-control-label" for="check2">Exo2 (Lettuce Romaine, Genovese Basil, Purple Bail, Celery, Dll leaves, Arugula)</label>
					</div>
					
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="check3" name="Exo3" value="Exo3">
						<label class="custom-control-label" for="check3">Exo3 (Lettuce Iceberg, Genovese Basil, Thai Basil, Celery, Parsley, Thyme)</label>
					</div>
					
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="check4" name="Exo4" value="Exo4">
						<label class="custom-control-label" for="check4">Exo4 (Lettuce Iceberg, Lettuce Romaine, Celery, Dill leaves, Parsley, Arugula, Thyme)</label>
					</div>
					
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="check5" name="Exo5" value="Exo5">
						<label class="custom-control-label" for="check5">Exo5 (Lettuce Iceberg, Lettuce Romaine, Genovese Basil, Thai Basil, Purple Basil, Celery)</label>
					</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Microgreen box"><!--Microgreen BOX-->
		<div class="container col-8 p-2">
			<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-3 pt-3">
					<div class="container">
						<p>Microgreen MixBox</p>
						<p>-Microgreens are packed with nutrients.</br>
							-They vary in taste, which can range from neutral to spicy, slightly sour or even bitter, depending on the variety.</br>
							-Add microgreens to your salads or wraps for some extra crunch.</br>
							-Microgreens may also be blended into smoothies or juiced.</br>
							-Try them on top of pizzas, soups, curries, omelets, stir-fries, pasta, and other hot dishes.</br>
							-Combine a few types of microgreens together like arugula, pea shoots, sunflowers, and beets and you have a colorful and tasty salad that's full of nutrition all on its own!</p>
					</div>
				</div>
		</div>
		<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-3 pt-3">
						<div class="container">
							<p>Choose any 10 microgreens <font color="red">*</font></p>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="check6" name="option1" value="Sunflower">
									<label class="custom-control-label" for="check6">Sunflower</label>
								</div>
								
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="check7" name="option2" value="Broccoli">
									<label class="custom-control-label" for="check7">Broccoli</label>
								</div>
								
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="check8" name="option3" value="Amaranth">
									<label class="custom-control-label" for="check8">Amaranth</label>
								</div>
								
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="check9" name="option4" value="Beetroot">
									<label class="custom-control-label" for="check9">Beetroot</label>
								</div>
								
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="check10" name="option5" value="Peas">
									<label class="custom-control-label" for="check10">Peas</label>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Micro-Exotic box"><!--Micro-Exotic BOX-->
		<div class="container col-8 p-2"><!--About Greeban Fresh-->
		<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-3 pt-3">
					<div class="container">
					<p>Exotic-Micro MixBox</p>
					<p>Each box will contain a 200 grams mix of ExoticGreens and 50 grams of 5 Microgreens of our choice </p>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-3 pt-3">
					<div class="container">
							<p>Choice of ComboBox <font color="red">*</font></p>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="Combo1" name="Combo1" value="Combo1">
								<label class="custom-control-label" for="Combo1">Combo1 (Lettuce Romaine, Genovese Basil, Purple Bail, Celery, Dill leaves, Arugula) + 5 Microgreens</label>
							</div>
							
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="Combo2" name="Combo2" value="Combo2">
								<label class="custom-control-label" for="Combo2">Combo2 (Lettuce Iceberg, Genovese Basil, Thai Basil, Celery, Parsley, Thyme) + 5 Microgreens</label>
							</div>
							
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="Combo3" name="Combo3" value="Combo3">
								<label class="custom-control-label" for="Combo3">Combo3 (Lettuce Iceberg, Lettuce Romaine, Celery, Dill leaves, Parsley, Arugula, Thyme) + 5 Microgreens</label>
							</div>
							
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="Combo4" name="Combo4" value="Combo4">
								<label class="custom-control-label" for="Combo4">Combo4 (Lettuce Iceberg, Lettuce Romaine, Genovese Basil, Thai Basil, Purple Basil, Celery) + 5 Microgreens</label>
							</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container col-8 p-2"><!--How often would you love to have Your Mix Box-->
		<div class="row justify-content-md-left">
				<div class="jumbotron col-12 pb-4 pt-2">
					<div class="container">
					<p>How often would you love to have Your Mix Box? <font color="red">*</font></p>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="Weekly (Once a week)">
						<label class="custom-control-label" for="customRadio1">Weekly (Once a week)</label>
					  </div>
					  <div class="custom-control custom-radio">
						<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="Bi-Weekly (Twice a week)"> 
						<label class="custom-control-label" for="customRadio2">Bi-Weekly (Twice a week)</label>
					  </div>				
				</div>
		</div>
	</div>
	</div>
	<div class="container col-8 p-2"><!--ContactDetails-->
		<div class="row justify-content-md-left">
			<div class="jumbotron col-12 pb-3 pt-3">
				<div class="container">
					<h4>Contact Details</h4>
					</div>
				<div class="container">
					<div class="form-group p-2">
						<label for="name">Your name <font color="red">*</font></label>
						<input type="text" class="form-control col-6" id="name" placeholder="Youe answer" name="name">		
					</div>
				</div>
				<div class="container">
					<div class="form-group p-2">
						<label for="phoneno">Phone number<font color="red">*</font></label>
						<input type="text" class="form-control col-6" id="phoneno" placeholder="Youe answer" name="phoneno">		
					</div>
				</div>
				<div class="container">
					<div class="form-group p-2">
						<label for="Address">Delivery Address<font color="red">*</font></label>
						<input type="text" class="form-control col-6" id="Address" placeholder="Youe answer" name="Address">		
					</div>
				</div>
				<div class="row justify-content-md-left">
					<div class="jumbotron col-12 pb-4 pt-2">
						<div class="container">
							<p>Time of delivery  <font color="red">*</font></p>
							<div class="custom-control custom-radio">
								<input type="radio" id="customRadio3" name="time" class="custom-control-input" value="12:30pm to 02:30pm">
								<label class="custom-control-label" for="customRadio3">12:30pm to 02:30pm</label>
						  	</div>
						  	<div class="custom-control custom-radio">
								<input type="radio" id="customRadio4" name="time" class="custom-control-input" value="04:00pm to 06:00pm"> 
								<label class="custom-control-label" for="customRadio4">04:00pm to 06:00pm</label>
						  	</div>				
						</div>
						<div class="container pb-3 pt-3">
							<p>Preferred contact method <font color="red">*</font></p>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="pcmcheck1" name="Pcm1" value="Phone">
								<label class="custom-control-label" for="pcmcheck1">Phone</label>
							</div>						
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="pcmcheck2" name="Pcm2" value="Email">
								<label class="custom-control-label" for="pcmcheck2">Email</label>
							</div>
						</div>
						<div class="container  pb-3 pt-3">
							<div class="form-group ">
								<label for="QA">Questions and comments</label>
								<input type="text" class="form-control col-6" id="QA" placeholder="Youe answer" name="QA">		
							</div>
						</div>
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
    $email = $_GET['email'];
    $producttype = $_GET['ProductType'];
    $Exo1 = $_GET['Exo1'];
    $Exo2 = $_GET['Exo2'];
    $Exo3 = $_GET['Exo3'];
    $Exo4 = $_GET['Exo4'];
    $Exo5 = $_GET['Exo5'];    
    $option1 = $_GET['option1'];
    $option2 = $_GET['option2'];
    $option3 = $_GET['option3'];
    $option4 = $_GET['option4'];
    $option5 = $_GET['option5'];
    $Combo1 = $_GET['Combo1'];
    $Combo2 = $_GET['Combo2'];
    $Combo3 = $_GET['Combo3'];
    $Combo4 = $_GET['Combo4'];
    $Deliveryfreq = $_GET['customRadio'];
    $name = $_GET['name'];
    $mobile = $_GET['phoneno'];
    $address = $_GET['Address'];
	$time = $_GET['time'];
	$pcm1 = $_GET['Pcm1'];
	$pcm2 = $_GET['Pcm2'];
	$QA = $_GET['QA'];


    
    $query = "INSERT INTO Subscribe_form VALUES ('$email','$producttype','$Exo1','$Exo2','$Exo3','$Exo4','$Exo5','$option1','$option2','$option3','$option4','$option5','$Combo1','$Combo2','$Combo3','$Combo4','$Deliveryfreq','$name','$mobile','$address','$time','$pcm1','$pcm2','$QA')";
    $data = mysqli_query($con, $query);
    
    if($data)
    {
        echo "Data inserted into database";
    }


}
?>
</body>
</html>