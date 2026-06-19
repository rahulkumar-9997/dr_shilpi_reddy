
@once
@push('styles')
<style>
	.ksr-hero {
		position: relative;
		overflow: hidden;
	}
	.ksr-hero::before {
		content: '';
		position: absolute;
		right: -60px;
		bottom: -60px;
		width: 400px;
		height: 400px;
		background: rgba(255, 255, 255, .07);
		border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
		pointer-events: none;
		z-index: 0;
	}
	.ksr-hero::after {
		content: '';
		position: absolute;
		left: -70px;
		top: -70px;
		width: 300px;
		height: 300px;
		background: rgba(255, 255, 255, .05);
		border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
		pointer-events: none;
		z-index: 0;
	}
	
	@keyframes ksrWaPulse {
		0% {
			box-shadow: 0 0 0 0 rgba(37, 211, 102, .55);
		}

		70% {
			box-shadow: 0 0 0 12px rgba(37, 211, 102, 0);
		}

		100% {
			box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
		}
	}
	.ksr-wa-pulse {
		animation: ksrWaPulse 2s infinite;
	}
	@keyframes ksrStatIn {
		from {
			opacity: 0;
			transform: translateY(10px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	.ksr-stat {
		animation: ksrStatIn .5s ease both;
	}

	.ksr-stat-d1 {
		animation-delay: 0ms;
	}

	.ksr-stat-d2 {
		animation-delay: 120ms;
	}

	.ksr-stat-d3 {
		animation-delay: 240ms;
	}
	@media (min-width: 992px) {
		.ksr-bottom-bar {
			display: none !important;
		}
	}
</style>
@endpush
@endonce
<section class="ksr-hero tw-w-full">
	<div class="ksr-hero-inner tw-relative tw-flex tw-items-center banner-con">
		<div class="tw-flex tw-flex-col lg:tw-flex-row tw-w-full tw-gap-6 lg:tw-gap-0">
			<div class="tw-w-full lg:tw-w-1/2 tw-flex tw-justify-center lg:tw-justify-start tw-order-2 lg:tw-order-1 tw-mt-4 lg:tw-mt-0">
				<div class="tw-relative tw-inline-block">
					<img src="{{ asset('fronted/shilpi-img/banner_new_dr.webp') }}"
					alt="Dr. K. Shilpi Reddy – Obstetrician & Gynaecologist"
					class="tw-relative tw-z-[1] tw-w-auto tw-object-contain tw-drop-shadow-2xl tw-max-h-64 sm:tw-max-h-80 md:tw-max-h-96 lg:tw-max-h-full"
					loading="lazy" width="480" height="560">
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
				<div class="tw-flex tw-flex-col sm:tw-flex-row tw-gap-3 tw-justify-center lg:tw-justify-start tw-mb-8">
					<a href="tel:+919503606049" class="tw-flex tw-items-center tw-justify-center tw-gap-2
						tw-bg-white tw-text-[#D20048] hover:tw-bg-[#fff1f5]
						tw-font-bold tw-text-[18px] tw-rounded-full tw-px-7 tw-py-3.5
						tw-shadow-lg tw-no-underline tw-whitespace-nowrap tw-transition-all">
						<i class="fas fa-phone-alt"></i> Make an Appointment
					</a>
					<a href="https://wa.me/919503606049"
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

{{-- ── FLOATING BOTTOM BAR (mobile only) ── --}}
<div class="ksr-bottom-bar tw-fixed tw-bottom-0 tw-left-0 tw-right-0
            tw-bg-white tw-flex tw-z-[9990]
            tw-shadow-[0_-2px_18px_rgba(0,0,0,.12)] tw-border-t tw-border-gray-200">

	<a href="tel:+919503606049"
		class="tw-flex-1 tw-flex tw-items-center tw-justify-center tw-gap-1.5
              tw-py-3.5 tw-text-sm tw-font-semibold tw-no-underline tw-transition-all
              tw-text-[#D20048] hover:tw-bg-[rgba(210,0,72,0.05)]
              tw-border-r tw-border-gray-200">
		<i class="fas fa-phone-alt tw-text-xs"></i> Call
	</a>

	<a href="https://wa.me/919503606049"
		class="tw-flex-1 tw-flex tw-items-center tw-justify-center tw-gap-1.5
              tw-py-3.5 tw-text-sm tw-font-semibold tw-text-green-600 tw-no-underline
              tw-transition-all hover:tw-bg-green-50 tw-border-r tw-border-gray-200">
		<i class="fab fa-whatsapp tw-text-base"></i> WhatsApp
	</a>

	<a href="{{ route('contact-us') }}"
		class="tw-flex-1 tw-flex tw-items-center tw-justify-center tw-gap-1.5
              tw-py-3.5 tw-text-white tw-text-sm tw-font-semibold tw-no-underline
              tw-transition-all tw-bg-[#D20048] hover:tw-bg-[#AA0E39]">
		<i class="fas fa-calendar-check tw-text-xs"></i> Book Now
	</a>

</div>

{{-- Spacer so bottom bar doesn't overlap content on mobile --}}
<div class="tw-h-[62px] lg:tw-hidden"></div>