@include('pages.frontend.head')
	<section class="about-content-section">
		<div class="container">
            @foreach ($item1 as $item1)


			<div class="row">
				<h1>{{ $item1->title }}</h1>
				<p>{{ $item1->dis }}</p>
			</div>
            @endforeach
		</div>
	</section>

	<section class="our-process-count-section">
		<div class="container">
			<div class="row">
				<div class="count-column">
					<div class="icon">
						<i class="fa-solid fa-user-group"></i>
					</div>
					<div class="content">
						<h3>1000+</h3>
						<p>Local PGD Learners</p>
					</div>
				</div>
				<div class="count-column red-column">
					<div class="icon">
						<i class="fa-solid fa-user-group"></i>
					</div>
					<div class="content">
						<h3>6000+</h3>
						<p>Training Perticipants</p>
					</div>
				</div>
				<div class="count-column">
					<div class="icon">
						<i class="fa-solid fa-user-group"></i>
					</div>
					<div class="content">
						<h3>550+</h3>
						<p>PGD Graduates</p>
					</div>
				</div>
				<div class="count-column red-column">
					<div class="icon">
						<i class="fa-solid fa-user-group"></i>
					</div>
					<div class="content">
						<h3>130+</h3>
						<p>Professional Certificate</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="our-vision-heading-section text-align">
		<div class="container">
			<div class="row">
				<h3>Our Vision</h3>
				<h2>"Transform career into profession"</h2>
			</div>
		</div>
	</section>

	<section class="our-vision-content-section">
		<div class="container">
			<div class="row">
				<div class="vision-column blue-column text-align">
					<div class="content">
						<img src="assets/img/quality-education.webp">
						<h3>Quality Education</h3>
						<p>Provide high quality education opportunity within a professional community</p>
					</div>
				</div>
				<div class="vision-column yellow-column text-align">
					<div class="content">
						<img src="assets/img/working-culture.webp">
						<h3>Working Culture</h3>
						<p>Enhance work environment through accountability, creativity and ethical rigour.</p>
					</div>
				</div>
				<div class="vision-column red-column text-align">
					<div class="content">
						<img src="assets/img/gratuated-education.webp">
						<h3>Quality Education</h3>
						<p>Build promising careers for ABP learners and staff by enhancing the network of professionals.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="registered-section">
		<div class="container">
			<div class="row">
				<div class="registered-column text-align">
					<img src="assets/img/NSDA-logo.webp">
					<h3>Registered by</br> NSDA</h3>
				</div>
				<div class="registered-column text-align">
					<img src="assets/img/eudpro-logo.webp">
					<h3>Certificate by</br> Edupro, UK</h3>
				</div>
				<div class="registered-column text-align">
					<img src="assets/img/CPD-certified-logo.webp">
					<h3>Endorsed by</br> CPD, UK</h3>
				</div>
				<div class="registered-column text-align">
					<img src="assets/img/AAOIFI-logo.webp">
					<h3>Registration Centre</br> of AAOIFI</h3>
				</div>
			</div>
		</div>
	</section>

	<section class="get-touch-section">
		<div class="container">
			<div class="heading-content text-align">
				<h2>Get in touch with us</h2>
			</div>
			<div class="row">
				<div class="touch-column text-align">
					<i class="fa-regular fa-envelope"></i>
					<h3>Email</h3>
					<a href="mailto:contact@abpbd.org">contact@abpbd.org</a>
				</div>
				<div class="touch-column text-align">
					<i class="fa-regular fa-envelope"></i>
					<h3>Location</h3>
					<a href="https://goo.gl/maps/TqmQeKdgz1CLaSc17" target="_blank">Rongon Tower (4th Floor)</br> 4 F/7, West Panthapath, Dhaka</a>
				</div>
				<div class="touch-column text-align">
					<i class="fa-regular fa-envelope"></i>
					<h3>Phone</h3>
					<a href="tel:01791139998">01791139998</a>
				</div>
			</div>
		</div>
	</section>

	<section class="about-contact-section contact-us-section">
		<div class="container">
			<div class="row">
				<div class="form-column">
					<form>
						<label for="name">Your Name <span>*</span></label>
						<input type="text" name="name" id="name" required="required">
						<label for="email">Your Email <span>*</span></label>
						<input type="email" name="email" id="email" required="required">
						<label for="subject">Subject</label>
						<input type="text" name="name" id="subject">
						<label for="message">Your Message</label>
						<textarea id="message"></textarea>
						<label class="number-captcha">12+10=?</label>
						<input type="number" name="number">
						<input type="submit" name="send" value="send" class="submit-button">
					</form>
				</div>
			</div>
		</div>
	</section>

<!---------------------- Footer Section -------------------->
   @include('pages.frontend.footer')
