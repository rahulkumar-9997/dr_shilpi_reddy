@if (Route::currentRouteName() !== 'our-foundation')
<section>
	<div class="cta1-section-area d-lg-block d-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 m-auto">
					<div class="cta1-main-boxarea">
						<div class="section-title text-center">
							<h2>
								Find Dr. K. Shilpi Reddy On
							</h2>
						</div>
						<div class="timer-btn-area">
							<div class="timer">
								<div class="time-box">
									<a href="https://www.youtube.com/channel/UC4JqmB6gTvjYSQixZtJ0jHw" target="_blank" rel="noopener noreferrer">
										<figure class="mb-0 d-inline-block">
											<img src="{{asset('fronted/shilpi-img/social-icon/youtube.webp')}}" alt="Youtube" class="img-fluid" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="time-box">
									<a href="https://www.linkedin.com/in/drkshilpireddy/" target="_blank" rel="noopener noreferrer">
										<figure class="mb-0 d-inline-block">
											<img src="{{asset('fronted/shilpi-img/social-icon/linkedin.webp')}}" alt="Linkedin" class="img-fluid" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="time-box">
									<a href="https://www.instagram.com/dr.k.shilpireddy/" target="_blank" rel="noopener noreferrer">
										<figure class="mb-0 d-inline-block">
											<img src="{{asset('fronted/shilpi-img/social-icon/instagram.webp')}}" alt="Instagram" class="img-fluid" loading="lazy">
										</figure>
									</a>
								</div>
								<div class="time-box" style="margin: 0 0px 0 0">
									<a href="https://www.facebook.com/Dr.k.shilpireddy" target="_blank" rel="noopener noreferrer">
										<figure class="mb-0 d-inline-block">
											<img src="{{asset('fronted/shilpi-img/social-icon/facebook.webp')}}" alt="Facebook" class="img-fluid" loading="lazy">
										</figure>
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<section>
	<div class="w-100 float-left weight-footer-con {{ Route::is('our-foundation') ? 'reduced-padding' : '' }}">
		<div class="container">
			<div class="weight-footer-inner-con">
				<div class="row">
					<div class="col-lg-5 col-12 text-xl-left text-lg-left text-center">
						<div class="weight-footer-content ">
							<figure>
								<img src="{{asset('fronted/shilpi-img/footer-New-logo-Shilpi-reddy-2.png')}}" alt="footer-logo" class="img-fluid footer-logo" loading="lazy">
							</figure>
							<p class="col-lg-11 col-md-7 pl-0 pr-0 ml-lg-0 mr-lg-0 ml-md-auto mr-md-auto">
								An Obstetrician and Gynaecologist, Social Activist, Woman Entrepreneur, Philanthropist, Motivational Speaker, and Author, with a vision for Women’s Empowerment.
							</p>
							<div class="weight-social-list">
								<ul class="list-unstyled mb-0">
									<li class="d-inline-block">
										<a href="https://www.facebook.com/Dr.k.shilpireddy" target="_blank">
											<i class="fab fa-facebook-square d-flex align-items-center justify-content-center text-white pr-0"></i>
										</a>
									</li>
									<li class="d-inline-block">
										<a href="https://www.instagram.com/dr.k.shilpireddy/?hl=en" target="_blank">
											<i class="fab fa-instagram d-flex align-items-center justify-content-center text-white pr-0"></i>
										</a>
									</li>
									<li class="d-inline-block">
										<a href="https://www.linkedin.com/in/drkshilpireddy/" target="_blank">
											<i class="fab fa-linkedin d-flex align-items-center justify-content-center text-white pr-0"></i>
										</a>
									</li>
									<li class="d-inline-block">
										<a href="https://www.youtube.com/channel/UC4JqmB6gTvjYSQixZtJ0jHw" target="_blank">
											<i class="fab fa-youtube-square mr-0 d-flex align-items-center justify-content-center text-white pr-0"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-4 col-sm-4 col-12">
						<div class="weight-footer-inner-con">
							<div class="row">
								<div class="col-lg-3 col-md-4 col-sm-4 col-6">
									<div class="weight-footer-content">
										<h5>Quick Links</h5>
										<ul class="list-unstyled mb-0">
											<li>
												<a href="{{URL::to('/')}}">
													<i class="fas fa-caret-right"></i>Home
												</a>
											</li>
											<li>
												<a href="{{route('about-us')}}">
													<i class="fas fa-caret-right"></i>My Story
												</a>
											</li>
											<li>
												<a href="{{route('contact-us')}}">
													<i class="fas fa-caret-right"></i>Contact Us
												</a>
											</li>
											<li>
												<a href="{{route('blog')}}">
													<i class="fas fa-caret-right"></i>Blog
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6">
									<div class="weight-footer-content">
										<h5>Social Links</h5>
										<ul class="list-unstyled mb-0">
											<li>
												<a href="https://www.facebook.com/Dr.k.shilpireddy" target="_blank">
													<i class="fas fa-caret-right"></i>Facebook
												</a>
											</li>
											<li>
												<a href="https://www.instagram.com/dr.k.shilpireddy/?hl=en" target="_blank">
													<i class="fas fa-caret-right"></i>Instagram
												</a>
											</li>
											<li>
												<a href="https://www.youtube.com/channel/UC4JqmB6gTvjYSQixZtJ0jHw" target="_blank">
													<i class="fas fa-caret-right"></i>Youtube
												</a>
											</li>
											<li>
												<a href="https://www.linkedin.com/in/drkshilpireddy/" target="_blank">
													<i class="fas fa-caret-right"></i>Linkedin
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6 col-md-5 col-sm-5 col-12">
									<div class="weight-footer-content">
										<h5>Get in Touch</h5>
										<ul class="list-unstyled mb-0">
											<li>
												<a href="mailto:drkshilpireddy@gmail.com">
													<span>Email:</span><span style="color: #52656d; font-weight: normal;"> drkshilpireddy@gmail.com</span>
												</a>
											</li>
											<li>
												<a href="tel:95036%2006049">
													<span>Phone: </span> <span style="color: #52656d; font-weight: normal;">+91 95036 06049</span>
												</a>
											</li>
											<!--<li><span>Fax: </span>+1 ( 987 ) 654 321  9 9</li>-->
											<li class="mb-0 address-footer">
												<span class="pr-2">Address:</span>KIMS Cuddles, Kondapur,
												Hyderabad, Telangana 500084
											</li>
										</ul>

									</div>
								</div>
								<div class="col-lg-12 footer-padding">
									<div class="row">
										<div class="col-lg-4">
											<h4 class="download-footer">Download the App from the link below</h4>
										</div>
										<div class="col-lg-8">
											<div class="mobile-app-btn footer-div">
												<a href="https://play.google.com/store/apps/details?id=com.shilpi.reddy.user" class="appointment-btn footer-btn"><i class="fab fa-google-play text-white"></i>Google Play</a>
												<a href="https://apps.apple.com/us/app/dr-shilpi/id6462843184" class="appointment-btn footer-btn"><i class="fab fa-app-store text-white"></i>App Store</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="w-100 float-left footer-con text-xl-left text-lg-left text-center ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 text-center">
				<p class="mb-0 footer-color">
					drkshilpireddy.com © <?php echo date("Y"); ?> |
					<a href="https://wizards.co.in/" target="_blank">Designed & Maintained by : <strong> Wizards </strong></a>|
					<a href="{{route('privacy-policy')}}" class="acolor"><strong>Privacy Policy</strong></a> |
					<a href="{{route('terms-of-use')}}" class="acolor"><strong>Terms Of Use</strong></a>
				</p>
			</div>
		</div>
	</div>
</div>
@if(session()->has('error'))
<div class="toast show" id="toast">
	<div class="toast-body">
		{{ session()->get('error') }}
	</div>
</div>
@endif
@if(session()->has('success'))
<div class="toast show" id="toast">
	<div class="toast-body">
		{{ session()->get('success') }}
	</div>
</div>
@endif
<!-- Floating Action Buttons - Bottom Right this  display only desktop and large screen -->
<div class="tw-fixed tw-bottom-8 tw-right-4 md:tw-right-8 tw-z-50 tw-hidden lg:tw-flex tw-flex-col tw-gap-3 tw-items-end">
	<a href="https://wa.me/919503606049?text={{ urlencode('Hi Dr. Shilpi, I would like to know more about your services.') }}"
		target="_blank"
		class="tw-flex tw-items-center tw-gap-2 tw-bg-gradient-to-r tw-from-green-500 tw-to-green-600 hover:tw-from-green-600 hover:tw-to-green-700 tw-text-white tw-px-4 tw-py-3 md:tw-px-5 md:tw-py-3 tw-rounded-full tw-shadow-lg hover:tw-shadow-xl tw-transition-all tw-duration-300 tw-transform hover:tw-scale-105 tw-group animate-bounce-slow hover:tw-no-underline hover:tw-text-white">
		<i class="fab fa-whatsapp tw-text-base"></i> 
		<span class="tw-text-sm md:tw-text-base tw-font-semibold hover:tw-text-white">WhatsApp</span>
		
	</a>
	<button type="button"
		onclick="openEnquiryFormModal()"
		class="tw-flex tw-items-center tw-gap-2 tw-bg-heading-secondary tw-from-blue-500 tw-to-blue-600 hover:tw-from-blue-600 hover:tw-to-blue-700 tw-text-white tw-px-4 tw-py-3 md:tw-px-5 md:tw-py-3 tw-rounded-full tw-shadow-lg hover:tw-shadow-xl tw-transition-all tw-duration-300 tw-transform hover:tw-scale-105 tw-group hover:tw-no-underline">
		<i class="fas fa-calendar-check tw-text-xs"></i>
		<span class="tw-text-sm md:tw-text-base tw-font-semibold">Book an Appointment</span>
	</button>
</div>

/*this display only mobile screen */
<div class="ksr-bottom-bar tw-fixed tw-bottom-0 tw-left-0 tw-right-0 tw-bg-white tw-flex lg:tw-hidden tw-z-[9990] tw-shadow-[0_-2px_18px_rgba(0,0,0,.12)] tw-border-t tw-border-gray-200">
	<a href="tel:+919503606049"
		class="tw-flex-1 tw-flex tw-items-center tw-justify-center tw-gap-1.5 tw-py-3.5 tw-text-sm tw-font-semibold tw-no-underline tw-transition-all tw-text-[#D20048] hover:tw-bg-[rgba(210,0,72,0.05)] tw-border-r tw-border-gray-200">
		<i class="fas fa-phone-alt tw-text-xs"></i> Call
	</a>
	<a href="https://wa.me/919503606049?text={{ urlencode('Hi Dr. Shilpi, I would like to know more about your services.') }}"
		class="tw-flex-1 tw-flex tw-items-center tw-justify-center tw-gap-1.5 tw-py-3.5 tw-text-sm tw-font-semibold tw-text-green-600 tw-no-underline tw-transition-all hover:tw-bg-green-50 tw-border-r tw-border-gray-200">
		<i class="fab fa-whatsapp tw-text-base"></i> WhatsApp
	</a>

	<a href="{{ route('contact-us') }}"
		class="tw-flex-1 tw-flex tw-items-center tw-justify-center tw-gap-1.5 tw-py-3.5 tw-text-white tw-text-sm tw-font-semibold tw-no-underline tw-transition-all tw-bg-[#D20048] hover:tw-bg-[#AA0E39]">
		<i class="fas fa-calendar-check tw-text-xs"></i> Book Now
	</a>
</div>

<div id="enquiryFormModal" class="tw-fixed tw-inset-0 tw-z-50 tw-hidden tw-items-center tw-justify-center tw-bg-black/50 tw-backdrop-blur-sm">
	<div class="tw-bg-white tw-rounded-2xl tw-shadow-2xl tw-max-w-2xl tw-w-full tw-mx-4 tw-max-h-[90vh] tw-overflow-y-auto">
		<div class="tw-flex tw-items-center tw-justify-between tw-border-b tw-border-gray-200 tw-px-6 tw-py-4">
			<h3 class="tw-text-xl tw-font-bold tw-text-gray-800">Book an Appointment</h3>
			<button type="button" onclick="closeEnquiryFormModal()" class="tw-text-gray-400 hover:tw-text-gray-600 tw-transition-colors">
				<svg class="tw-w-6 tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div class="tw-px-6 tw-pb-6 tw-pt-4">
			@include('frontend.pages.common.enquiry-form', [
			'buttonText' => 'Make an Appointment',
			'formType' => 'modalForm',
			'pageURL' => request()->fullUrl()
			])
		</div>
	</div>
</div>