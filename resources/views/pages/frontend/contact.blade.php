@include('pages.frontend.head')

    <section class="page-cover-section">
        <div class="container">
            <div class="row">
                <h1>Contact</h1>
            </div>
        </div>
    </section>


	<section class="contact-us-section">
		<div class="container">
            @if (session('submit'))
            <div class="alert alert-success">
              {{ session('submit') }}
            </div>
            @endif
			<div class="row">
				<div class="form-column">
					<h2>Send Us a Message</h2>
					<form action="{{ url('/contact-submit') }}" method="POST">
                        @csrf
						<label for="name">Your Name <span>*</span></label>
						<input type="text" name="name" id="name" required="required">
						<label for="email">Your Email <span>*</span></label>
						<input type="email" name="email" id="email" required="required">
						<label for="subject">Subject</label>
						<input type="text" name="subject" id="subject">
						<label for="message">Your Message</label>
						<textarea id="message" name="massage"></textarea>
						{{-- <label class="number-captcha">12+10=?</label>
						<input type="number" name="number"> --}}
						<input type="submit" name="send" value="send" class="submit-button">
					</form>
				</div>
				<div class="map-column">
					<div class="map-content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.844296598805!2d90.3838553!3d23.7529312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8af8ef50191%3A0x73caa95fdb11c3c0!2sAcademy%20of%20Business%20Professionals%20(ABP)!5e0!3m2!1sen!2sbd!4v1680806209974!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="info-row">
						<div class="location-column">
							<p><i class="fa-solid fa-location-dot"></i> <a href="https://goo.gl/maps/TqmQeKdgz1CLaSc17" target="_blank">44 F/7 (4th Floor), Rongon Tower, West Panthapath, Dhaka-1205</a></p>
						</div>
						<div class="info-column">
							<div class="conetnt">
                                <p><i class="fa-solid fa-phone"></i><a href="tel:01885989600">01885989600</a></p>
                            <p><i class="fa-solid fa-phone"></i><a href="mailto:contact@abpbd.org">contact@abpbd.org</a></p>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!---------------------- Footer Section -------------------->
    <footer>
        <div class="footer-section">
                <div class="footer-main">
                    <div class="col left">
                        <h4 class="main-title">Academy of Business Professionals - ABP</h4>
                        <div class="regional-office">
                            <h4>Regional Office (South Asia)</h4>
                            <hr>
                            <p>Business Professionals
                                <br>
                                Rongon Tower (4th Floor)
                                <br>44 F/7, West Panthapath, Dhaka-1205
                                <br><a href="mailto:contact@abpbd.org"><span>Email:</span> contact@abpbd.org</a>
                                <br><a href="tel:01885989600"><span>Phone:</span> 01885989600</a>
                                <br><a href="tel:01791139998"><span>Phone:</span> 01791139998</a>
                                <p>10:00 AM - 07:00 PM</p>
                                <p>Ramadan time 10:00AM-04:00PM</p>
                            </p>
                        </div>
                        <div class="headquaters">
                            <h4>Global Headquarters</h4>
                            <hr>
                            <p>71-75, Shelton Street, Covent Garden, London, WC2H 9JQ, UNITED KINGDOM </p>
                            <a href="tel:+4407342775354"><span>Phone:</span> +4407342775354</a><br>
                            <a href="mailto:contact@abpbd.org"><span>Phone:</span> contact@abpbd.org</a>
                        </div>
                        <div class="social-link">
                            <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col middle">
                        <h4>Quick Links</h4>
                        <div class="link">
                            <a href="gallery.html">Photo Gallery</a>
                            <a href="#">Graduate List</a>
                            <a href="#">Verify Your Qualification </a>
                            <a href="#">Admission Form</a>
                            <a href="#">Live Workshop/Webinar</a>
                            <a href="#">Student Login</a>
                            <a href="#">Jobs Portal</a>
                            <a href="#">Alumni Benefit</a>
                            <a href="#">GP Star Offer</a>
                            <a href="blog.html">Blog</a>
                            <a href="#">Edupro UK</a>
                            <a href="#">Scholarship Result</a>
                            <a href="#">ABP Policies</a>
                        </div>
                        <div class="mobile-app">
                            <h4>Get Mobile App</h4>
                            <a href="#"><img src="assets/img/appstore.webp" alt=""></a>
                            <a href="#"><img src="assets/img/google.webp" alt=""></a>
                        </div>
                    </div>
                    <div class="col right">
                        <h4>We Accept:</h4>
                        <img src="assets/img/ssssll.webp" alt="">
                        <div class="payment">
                            <a href="tel:01844178017"><span>– CellFin & mCash:</span> 01844178017</a><hr>
                            <a href="tel:018441780178 "><span> -Rocket (Personal):</span> 018441780178  (Use send money)</a><hr>
                            <a href="tel:01810023595 "><span> -bKash (Personal):</span> 01810023595 (use send money)</a><hr>
                            <a href="tel:01844178017 "> <span>-bKash (Merchant):</span> 01844178017 (use make payment)</a><hr>
                            <a href="tel:01324713380 "><span>-Nagad (Merchant):</span> 01324713380 (use make payment)</a><hr>
                            <a href="tel:01844178017 "><span>-Upay (Merchant):</span> 01844178017 (use make payment)</a>
                        </div>
                    </div>
                </div>
        </div>
    </footer>

<!-------------- Socket Section ------------------------->
    <div class="socket-section">
        <div class="container">
            <p>Copyright © Academy of Business Professionals (ABP)</p>
        </div>
    </div>


    <!-- bootstrap-js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- slick slider  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- js -->
    <script src="js/logistics-script.js"></script>
</body>
</html>
