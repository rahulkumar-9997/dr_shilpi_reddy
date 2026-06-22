
<section class="ksr-hero tw-w-full">
	<div class="ksr-hero-inner tw-relative tw-flex tw-items-center banner-con">
		<div class="tw-flex tw-flex-col lg:tw-flex-row tw-w-full tw-gap-3 lg:tw-gap-0">
			<div class="tw-w-full lg:tw-w-1/2 tw-flex tw-justify-center lg:tw-justify-start tw-order-2 lg:tw-order-1 tw-mt-2 lg:tw-mt-0">
				<div class="tw-relative tw-inline-block">
					<img
						src="{{ asset('fronted/shilpi-img/banner_new_dr.webp') }}"
						alt="Dr. K. Shilpi Reddy – Obstetrician & Gynaecologist"
						width="480"
						height="560"
						loading="lazy"
						class="tw-relative
						tw-w-full
						tw-max-w-[320px]
						sm:tw-max-w-[280px]
						md:tw-max-w-[360px]
						lg:tw-max-w-[450px]
						xl:tw-max-w-[480px]
						tw-h-auto
						tw-object-contain
						tw-drop-shadow-2xl">
				</div>
			</div>
			<div class="tw-w-full lg:tw-w-1/2 tw-text-white tw-order-1 lg:tw-order-2 tw-text-center lg:tw-text-left lg:tw-pl-4 banner-right-content text-white banner_home_div">
				<div class="tw-inline-flex tw-items-center tw-gap-2 tw-bg-white/15 tw-rounded-full tw-px-4 tw-py-1.5 tw-mb-4">
					<span class="tw-w-1.5 tw-h-1.5 tw-rounded-full tw-bg-[#F0C040] tw-shrink-0"></span>
					<span class="tw-text-[13px] tw-font-semibold tw-uppercase tw-tracking-widest tw-text-white/90">
						Sustainable Living
					</span>
				</div>
				<h1 class="tw-text-[52px] tw-text-white tw-mb-5">
					An Inspiration to all the
					working women
					and mothers.
				</h1>
				<p class="tw-text-white tw-mb-6 ">
					Doctor K. Shilpi Reddy is an Obstetrician and Gynaecologist, Social Activist,
					Woman Entrepreneur, Philanthropist, Motivational Speaker, and Author,
					with a vision for Women's Empowerment.
				</p>
				<div class="tw-flex tw-flex-wrap tw-gap-2 tw-justify-center lg:tw-justify-start tw-mb-7">
					@foreach(['MBBS · MS (OB-GYN)', 'KIMS Cuddles, Hyderabad', '15+ Years Experience'] as $b)
					<span class="tw-text-white tw-text-[12px] tw-font-medium tw-px-3 tw-py-1 tw-rounded-full tw-bg-white/15">
						{{ $b }}
					</span>
					@endforeach
				</div>
				<div class="tw-flex tw-flex-col sm:tw-flex-row tw-gap-3 tw-justify-center lg:tw-justify-start tw-mb-2 lg:tw-mb-8 sm:tw-mb-5">
					<a href="tel:+919503606049" class="tw-flex tw-items-center tw-justify-center tw-gap-2
						tw-bg-white tw-text-[#D20048] hover:tw-bg-[#fff1f5]
						tw-font-bold tw-text-[18px] tw-rounded-full tw-px-7 tw-py-3.5
						tw-shadow-lg tw-no-underline tw-whitespace-nowrap tw-transition-all">
						<i class="fas fa-phone-alt"></i> Make an Appointment
					</a>
					<a href="https://wa.me/919503606049?text={{ urlencode('Hi Dr. Shilpi, I would like to know more about your services.') }}"
						class="ksr-wa-pulse tw-flex tw-items-center tw-justify-center tw-gap-2
						tw-bg-[#25D366] tw-text-white
						tw-font-semibold tw-text-[18px] tw-rounded-full tw-px-7 tw-py-3.5
						tw-no-underline tw-whitespace-nowrap tw-transition-all hover:tw-bg-[#1ebe5d] hover:tw-text-white">
						<i class="fab fa-whatsapp tw-text-lg"></i> WhatsApp
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
