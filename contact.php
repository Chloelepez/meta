<?php require("helpers.php");?>

<?php renderHeader(["title" => "META MARBLE & GRANITE Contact"]);?>

	<!--contact-start-->
	<div class="pages" id="pages">
		<div class="container">
			<div class="contact-top heading">
				<h2 class="title">CONTACT</h2>
			</div>
				<div class="contact-text">
					<?php
					if(isset($_POST['submit'])){
							$to = "info@metamarbleandgranite.com"; // this is your Email address
							$from = $_POST['email']; // this is the sender's Email address
							$first_name = $_POST['first_name'];
							$last_name = $_POST['phone'];
							$subject = "Meta website question";
							$subject2 = "Copy of your form submission";
							$message = $first_name . " " . $phone . "  wrote the following:" . "\n\n" . $_POST['message'];
							$message2 = "Mail Sent. Thank you for contacting Meta Granite and Marble " . $first_name . ", we will contact you shortly." . "\n" ."Here is a copy of your message " . "\n\n" . $_POST['message'];

							$headers = "From:" . $from;
							$headers2 = "From:" . $to;
							mail($to,$subject,$message,$headers);
							mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
							echo "<p>Mail Sent. Thank you " . $first_name . ", we will contact you shortly.</p>";
							}
					?>
				<div class="col-md-3 contact-left">
						<div class="address">
							<h5>Address</h5>
							<p><strong>META MARBLE & GRANITE</strong></p>
							<p><i class="fas fa-map-marker-alt"></i>410 S. Front Street</p>
							<p class="poffset">Seattle, WA 98108</p>
							<p><i class="fas fa-phone"></i>+1 206-762-5547</p>
							<p><i class="fas fa-fax"></i>+1 206 762-5607</p>
							<p><i class="fas fa-envelope"></i><a href="mailto:info@metamarbleandgranite.com">
								info@metamarbleandgranite.com</a></p>
							<p><i class="fas fa-clock"></i>Mon-Fri. 7:30am-5:00pm</p>
							<p class="poffset">Sat. 10:00am-3:00pm</p>

						</div>

					</div>
					<div class="col-md-9 contact-right">

						<form action="" method="post">
							<input type="text" placeholder="Name" name="first_name">
							<input type="text" placeholder="Phone" name="phone">
							<input type="text"  placeholder="Email" name="email">
							<textarea placeholder="Message" required="" name="message"></textarea>
							<div class="submit-btn">
								<input type="submit" value="Submit" name="submit">
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
			     </div>
			</div>

		</div>
	<!--contact-end-->
	<!--map-start-->
	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.9890475621064!2d-122.33061878489906!3d47.548541899980876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490419576d7eecb%3A0xe05ac5cec5efce1b!2sMeta+Marble+%26+Granite!5e0!3m2!1sen!2sbe!4v1445190565808" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!--map-end-->

	<?php renderFooter();?>
