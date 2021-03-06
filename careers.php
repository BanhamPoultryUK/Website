<?php

	$Title = 'Banham Poultry &middot; Careers';
	$Description = 'Search for vacancies at Banham Poultry.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	$Custom = '<script type="text/javascript" src="assets/js/gen_validatorv31.js"></script>';
	include 'assets/sections/header.php';
?>
		<div id="main">
		<div id="attach_form_div">
		<form id='contactus' action="/_contact-form/send-mail_recruitment.php" method="post" enctype="multipart/form-data">
			<fieldset >
				<h3 class="heading">Contact us</h3>
				<p>If you would like to send us your cv, please attach it with this form.</p><br /><br />
			<div class='container'>
				<h3><label for='name' >Name<span> *</span></label></h3>
				<input type='text' name='name' id='name' value='' maxlength="50" /><br/>
			</div>
			<div class='container'>
				<h3><label for='email' >Email Address<span> *</span></label></h3>
				<input type='text' name='email' id='email' value='' maxlength="50" /><br/>
			</div>
			<div class='container'>
				<h3><label for='message' >Message</label></h3>
				<textarea rows="10" cols="50" name='message' id='message'></textarea>
			</div>
			<!-- TODO File uploads
			<div style="clear:both"></div>
			<div class='container'>
				<h3><label for='cv' >Upload your CV</label></h3>
				<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
				<input type="file" name='cv' id='cv' /><br/>
			</div>
			-->
			<div class='container'>
				<p>By submitting your details you consent to Banham Poultry (2018) Limited retaining them for legitimate business interests in line with current GDPR legislation.</p>
				<br />
				<input type='submit' id='submit' name='Submit' value='Send' />
			</div>
		</fieldset>
	</form>
		</div>
			<div id="job_desc_div">
				<h3 class="heading">Job Vacancies</h3>
				<br>
				<hr>
				<br>
				<!--
				<h4>Hygiene Team Leaders</h4>
				<ul>
					<li>Hours of work:
						<ul>
							<li>Hours of work: 5 days out of 7 (10pm-6am)
							<li>Nights 6.30pm – 3am (Monday-Friday)
						</ul>
					</li>
					<li>Rate of pay: £10.50 per hour
					<li>Previous experience within food manufacturing required
				</ul>
				<br>
				<h4>Line Leaders Operatives</h4>
				<ul>
					<li>Hours of work:
						<ul>
							<li>Days 6am - 6.30pm (3 on, 1 off, 3 on, 7 off)
							<li>Nights 6.30pm – 3am (Monday-Friday)
						</ul>
					</li>
					<li>Rate of pay: £10.00 per hour
				</ul>
				<br>
				<h4>Production Operatives</h4>
				<ul>
					<li>Hours of work:
						<ul>
							<li>Days 6am - 6.30pm (3 on, 1 off, 3 on, 7 off)
							<li>Nights 6.30pm – 3am (Monday-Friday)
						</ul>
					</li>
					<li>Rate of pay: £8.21 per hour
				</ul>
				-->
				<p>We have no open positions at this time.</p>
				<br>
				<hr>
				<br>
				<h4>Discounted staff sales, life insurance, and on-site parking and canteen are available.</h4>
				<br>
				<h4>Please contact <a href="mailto:hr@banhampoultryuk.com">hr@banhampoultryuk.com</a> for further information.</h4>
				<br>
				<h4>We do not accept correspondence via Recruitment Agencies.</h4>
				<br>
				<p>If you have submitted a CV or Application Form you will hear from us, but please be patient.</p>
				<p>Thank you for your interest.</p>
			</div>
		</div>
	</div>

<?php include 'assets/sections/footer.php'; ?>
