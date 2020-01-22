<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<?php include 'form_process.php'; ?>
</head>
<body style="background-color: #ebefea">
<a name="top"></a>
<?php include 'includes/navbar_all.php'; ?>  
  
<div class="container pt-3 pb-3 contactitem containercontact">
		<div class="row justify-content-center text-center">
        <div class="col-12 text-center">
          <h3 class="text-dark">You Can Reach Us At</h3>
        </div>
      <!-- First items --->
          <div class="col-md-12 mb-4 contactitem" >
              <div class="card border-0 shadow">
                      <div class="card-body text-center row align-items-center">
						  <div class="col-md-6 mb-5 mt-5" height="35px">
							  <div class="card border-0 shadow">
								  <div class="card-body text-center">
									  <a class="btn-sm"><img src="img/call.webp" width="25" height="25"></a>
									  <p><h6>+91 96195 23516</br>
									  +91 98204 39007<br></h6></p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5 mt-5">
								<div class="card border-0 shadow">
									<div class="card-body text-center">
									<a class="btn-sm"><img src="img/mail.webp" width="35" height="40"></a>
									<p><h6><a href="">info@greeban.com</a></h6></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>

<div class="container containercontact" style="background-color: #ebefea">
	<form id="contact" action="sendmail.php" method="POST">
		<h3>Get In Touch</h3>
		<h4>Contact us today, and get reply with in 24 hours!</h4>
		<fieldset>
			<input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1"  autofocus>
			<span class="error"><?=$name_error?></span>
		</fieldset>
		<fieldset>
			<input placeholder="Your Email Address" name="email" type="text" value="<?= $email ?>" tabindex="2" >
			<span class="error"><?=$email_error?></span>
		</fieldset>
		<fieldset>
			<input placeholder="Your Phone Number" name="phone" type="text" value="<?= $phone ?>" tabindex="3" >
			<span class="error"><?=$phone_error?></span>
		</fieldset>
		<fieldset>
			<textarea placeholder="Type your Message Here...." name="message" type="text" value="<?= $message ?>" tabindex="5" ></textarea>
		</fieldset>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
		<div class="success"><?= $success; ?></div>
	</form> 
</div>

<div class="container"></div>
<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>
</body>
</html>