@once
@push('styles')
<style>
	.tw-sticky {
		padding: 26px 0 24px 0;
	}

	.fixed .tw-sticky {
		padding: 10px 0 10px 0;
	}

	@keyframes ksrDown {
		from {
			opacity: 0;
			transform: translateY(-6px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	.ksr-mega-anim {
		animation: ksrDown .2s ease forwards;
	}

	.ksr-chev {
		transition: transform .2s ease;
	}

	.ksr-chev.ksr-rotated {
		transform: rotate(180deg);
	}

	.ksr-mega {
		display: none;
		position: absolute;
		top: calc(100% + 4px);
		background: #fff;
		border-radius: 1rem;
		padding: 1.25rem;
		z-index: 2000;
		border: 1px solid rgba(210, 0, 72, .12);
		box-shadow: 0 24px 64px rgba(210, 0, 72, .22);
	}

	.ksr-drop {
		display: none;
		position: absolute;
		top: calc(100% + 4px);
		background: #fff;
		border-radius: 1rem;
		padding: .5rem;
		z-index: 2000;
		border: 1px solid rgba(210, 0, 72, .12);
		box-shadow: 0 24px 64px rgba(210, 0, 72, .22);
	}

	.ksr-mega-foundation {
		width: 520px;
		left: 50%;
		transform: translateX(-50%);
		grid-template-columns: 1fr 1fr;
		gap: 1.25rem;
	}

	.ksr-mega-ibucare {
		width: 660px;
		right: 0;
		grid-template-columns: 1fr 1fr 1fr;
		gap: 1rem;
	}

	.ksr-drop-foundation,
	.ksr-drop-services {
		width: 320px;
		right: 0;
	}

	.ksr-col-divider {
		border-bottom: 1px solid rgba(210, 0, 72, .1);
	}

	.ksr-col-divider-blue {
		border-bottom: 1px solid rgba(7, 69, 96, .1);
	}

	#ksrDrawer {
		position: fixed;
		top: 0;
		bottom: 0;
		right: -100%;
		width: min(340px, 88vw);
		transition: right .3s ease;
		scrollbar-width: thin;
		scrollbar-color: #D20048 #fff1f5;
	}

	#ksrDrawer::-webkit-scrollbar {
		width: 4px;
	}

	#ksrDrawer::-webkit-scrollbar-thumb {
		background: #D20048;
		border-radius: 4px;
	}

	#ksrDrawer.ksr-open {
		right: 0;
	}

	#ksrOverlay {
		display: none;
	}

	#ksrOverlay.ksr-open {
		display: block;
	}

	.ksr-acc-panel {
		display: none;
	}

	.ksr-acc-panel.ksr-open {
		display: block;
	}

	.ksr-mob-chev {
		transition: transform .2s ease;
	}

	.ksr-mob-chev.ksr-open {
		transform: rotate(180deg);
	}

	#ksrNav.ksr-scrolled {
		box-shadow: 0 4px 20px rgba(210, 0, 72, .35);
	}
	.mega-sub-menu .add-menu-left ul {
		columns: 3;
		-webkit-columns: 3;
		-moz-columns: 3;
		column-gap: 20px;
		padding: 0px;
		list-style: none;
		margin: 0;
	}
</style>
@endpush
@endonce
<nav id="ksrNav" class="tw-sticky tw-top-0 tw-z-[1050] tw-bg-[#D20048] tw-transition-shadow tw-duration-300">
	<div class="tw-flex tw-items-center tw-justify-between tw-h-16 md:tw-h-[70px]">
		<a href="{{ URL::to('/') }}"
			class="tw-flex tw-items-center tw-gap-2 tw-shrink-0 tw-min-w-0 tw-no-underline">
			<img src="{{ asset('fronted/shilpi-img/logo_white.png') }}"
				alt="Dr. K. Shilpi Reddy" width="150" height="64"
				class="tw-w-[300px] tw-h-auto tw-ransition-all tw-duration-300 tw-ease-in-out"
				loading="lazy">
		</a>
		<ul class="tw-hidden lg:tw-flex tw-items-center tw-gap-0.5 tw-list-none tw-mb-0 tw-pl-0">
			@foreach([
			['About', route('about-us'), false],
			['Mrs. Mom','https://mrsmomevent.com/', true],
			['Work', route('work'), false],
			['Media', route('media'), false],
			['Blog', route('blog'), false],
			['Contact', route('contact-us'), false],
			] as $nl)
			<li class="tw-list-none">
				<a href="{{ $nl[1] }}"
					@if($nl[2]) target="_blank" rel="noopener" @endif
					class="tw-flex tw-items-center tw-gap-1 tw-text-[17px] tw-font-medium tw-px-3 tw-py-2 tw-rounded-lg tw-no-underline tw-whitespace-nowrap tw-text-white/90 hover:tw-text-white hover:tw-bg-white/10 tw-transition-all hover:tw-no-underline">
					{{ $nl[0] }}
				</a>
			</li>
			@endforeach
			<li class="ksr-has-drop tw-relative tw-list-none">
				<a href="#" class="ksr-drop-trigger tw-flex tw-items-center tw-gap-1 tw-text-[17px] tw-font-medium tw-px-3 tw-py-2 tw-rounded-lg tw-no-underline tw-whitespace-nowrap tw-text-white/90 hover:tw-text-white hover:tw-bg-white/10 tw-transition-all hover:tw-no-underline"
					data-panel="panelFoundation">
					Our Foundation
					<svg class="ksr-chev tw-w-3.5 tw-h-3.5 tw-shrink-0"
						viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
						<polyline points="6 9 12 15 18 9" />
					</svg>
				</a>
				<div id="panelFoundation" class="ksr-drop ksr-drop-foundation">
					<a href="{{ route('our-foundation') }}" class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2.5 tw-rounded-xl tw-text-[17px] tw-no-underline tw-transition-all  tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.05)] hover:tw-text-[#D20048] hover:tw-no-underline">
						<i class="fas fa-chevron-right tw-text-[10px] tw-mt-[3px] tw-shrink-0 tw-text-[#D20048]"></i>
						Dr. K. Shilpi Reddy Foundation
					</a>
					<a href="{{ route('fertility-conclave') }}"
						class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2.5 tw-rounded-xl
						tw-text-[17px] tw-no-underline tw-transition-all
						tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.05)] hover:tw-text-[#D20048] hover:tw-no-underline">
						<i class="fas fa-chevron-right tw-text-[10px] tw-mt-[3px] tw-shrink-0 tw-text-[#D20048]"></i>
						Natural Fertility Conclave
					</a>
				</div>
			</li>
			<li class="tw-list-none">
				<a href="{{ route('ibu-care') }}" class="tw-flex tw-items-center tw-gap-1 tw-text-[16px] tw-font-medium tw-px-3 tw-py-2 tw-rounded-lg tw-no-underline tw-whitespace-nowrap tw-text-white/90 hover:tw-text-white hover:tw-bg-white/10 tw-transition-all hover:tw-no-underline">
					Ibu Care
				</a>
			</li>
			<li class="ksr-has-mega tw-relative tw-list-none"> 
				<a href="{{ route('ibu-care') }}" class="ksr-mega-trigger tw-flex tw-items-center tw-gap-1 tw-text-[17px] tw-font-medium tw-px-3 tw-py-2 tw-rounded-lg tw-no-underline tw-whitespace-nowrap tw-text-white/90 hover:tw-text-white hover:tw-bg-white/10 tw-transition-all hover:tw-no-underline" data-panel="panelIbuCare"> Services 
					<svg class="ksr-chev tw-w-3.5 tw-h-3.5 tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
					</svg> 
				</a>
				<div id="panelIbuCare" class="ksr-mega ksr-mega-ibucare">
					<div class="add-menu-left mega-sub-menu">
						<div class="add-menu-left">
							<ul>
								@foreach([
									'Antenatal Care',
									'Postnatal Support',
									'High-Risk Pregnancy',
									'Normal & C-Section Delivery',
									'Breastfeeding Guidance',
									'PCOS / PCOD Management',
									'Endometriosis Treatment',
									'Menstrual Disorders',
									'Hysteroscopy & Laparoscopy',
									'Menopause Management'
								] as $it)

								<li>
									<a  href="{{ route('ibu-care') }}" class="tw-flex tw-items-center tw-gap-2 tw-px-3 tw-py-2.5 tw-rounded-xl tw-text-[17px] tw-no-underline tw-transition-all  tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.05)] hover:tw-text-[#D20048] hover:tw-no-underline">
										<i class="fas fa-chevron-right tw-text-[10px] tw-mt-[3px] tw-shrink-0 tw-text-[#D20048]"></i>
										{{ $it }}
									</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<button id="ksrBurger" aria-label="Open menu" aria-expanded="false"
			class="lg:tw-hidden tw-flex tw-flex-col tw-gap-[5px] tw-p-2 tw-rounded-lg
			tw-bg-transparent hover:tw-bg-white/10 tw-border-0 tw-cursor-pointer
			tw-transition-all tw-shrink-0">
			<span class="tw-block tw-w-6 tw-h-0.5 tw-bg-white tw-rounded"></span>
			<span class="tw-block tw-w-6 tw-h-0.5 tw-bg-white tw-rounded"></span>
			<span class="tw-block tw-w-6 tw-h-0.5 tw-bg-white tw-rounded"></span>
		</button>
	</div>
</nav>
<div id="ksrOverlay" class="tw-fixed tw-inset-0 tw-bg-black/45 tw-z-[9998]"></div>
<div id="ksrDrawer"
	class="tw-fixed tw-top-0 tw-bottom-0 tw-bg-white tw-z-[9999]
            tw-flex tw-flex-col tw-overflow-y-auto tw-shadow-2xl"
	role="dialog" aria-modal="true" aria-label="Site navigation">

	{{-- Head --}}
	<div class="tw-flex tw-items-center tw-justify-between tw-px-5 tw-py-4
                tw-shrink-0 tw-bg-[#D20048]">
		<div>
			<p class="tw-text-white tw-font-bold tw-text-[15px] tw-leading-tight tw-mb-0">
				Dr. K. Shilpi Reddy
			</p>
			<p class="tw-text-white/70 tw-text-[10px] tw-mb-0">Obstetrician &amp; Gynaecologist</p>
		</div>
		<button id="ksrClose" aria-label="Close menu"
			class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center
                       tw-text-white tw-text-lg tw-border-0 tw-cursor-pointer tw-shrink-0
                       tw-bg-white/20 hover:tw-bg-white/35 tw-transition-all">✕</button>
	</div>

	{{-- Quick strip --}}
	<div class="tw-flex tw-items-center tw-justify-around tw-py-3 tw-shrink-0
                tw-bg-[rgba(210,0,72,0.04)] tw-border-b tw-border-[rgba(210,0,72,0.1)]">
		<a href="tel:+919503606049"
			class="tw-flex tw-flex-col tw-items-center tw-gap-0.5 tw-text-[11px] tw-font-medium
                  tw-no-underline tw-text-[#D20048] hover:tw-opacity-75 tw-transition-opacity">
			<span class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center
                         tw-mb-0.5 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
				<i class="fas fa-phone-alt"></i>
			</span>Call
		</a>
		<a href="https://wa.me/919503606049"
			class="tw-flex tw-flex-col tw-items-center tw-gap-0.5 tw-text-[11px] tw-font-medium
                  tw-no-underline tw-text-green-600 hover:tw-opacity-75 tw-transition-opacity">
			<span class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center
                         tw-mb-0.5 tw-bg-green-100 tw-text-green-600">
				<i class="fab fa-whatsapp"></i>
			</span>WhatsApp
		</a>
		<a href="{{ route('contact-us') }}"
			class="ksr-close-on-click tw-flex tw-flex-col tw-items-center tw-gap-0.5 tw-text-[11px] tw-font-medium
                  tw-no-underline tw-text-[#074560] hover:tw-opacity-75 tw-transition-opacity">
			<span class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center
                         tw-mb-0.5 tw-bg-[rgba(7,69,96,0.1)] tw-text-[#074560]">
				<i class="fas fa-calendar-check"></i>
			</span>Book
		</a>
	</div>

	{{-- Nav list --}}
	<ul class="tw-list-none tw-mb-0 tw-pl-0 tw-flex-1">

		@foreach([
		['about-us', 'fas fa-user-circle','About'],
		['work', 'fas fa-briefcase', 'Work'],
		['media', 'fas fa-video', 'Media'],
		['blog', 'fas fa-newspaper', 'Blog'],
		['contact-us', 'fas fa-envelope', 'Contact'],
		] as $ml)
		<li class="tw-border-b tw-border-gray-100">
			<a href="{{ route($ml[0]) }}"
				class="ksr-close-on-click tw-flex tw-items-center tw-gap-3 tw-px-5 tw-py-3.5
                      tw-text-sm tw-font-medium tw-no-underline tw-w-full
                      tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048]
                      tw-transition-all">
				<span class="tw-w-7 tw-h-7 tw-rounded-lg tw-flex tw-items-center tw-justify-center
                             tw-text-xs tw-shrink-0 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
					<i class="{{ $ml[1] }}"></i>
				</span>
				{{ $ml[2] }}
			</a>
		</li>
		@endforeach

		<li class="tw-border-b tw-border-gray-100">
			<a href="https://mrsmomevent.com/" target="_blank" rel="noopener"
				class="tw-flex tw-items-center tw-gap-3 tw-px-5 tw-py-3.5
                      tw-text-sm tw-font-medium tw-no-underline
                      tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048]
                      tw-transition-all">
				<span class="tw-w-7 tw-h-7 tw-rounded-lg tw-flex tw-items-center tw-justify-center
                             tw-text-xs tw-shrink-0 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
					<i class="fas fa-crown"></i>
				</span>
				Mrs. Mom
				<i class="fas fa-external-link-alt tw-ml-auto tw-text-[11px] tw-text-gray-400"></i>
			</a>
		</li>

		{{-- Foundation accordion --}}
		<li class="tw-border-b tw-border-gray-100">
			<button class="ksr-acc-btn tw-flex tw-items-center tw-gap-3 tw-px-5 tw-py-3.5
                           tw-text-sm tw-font-medium tw-bg-transparent tw-border-0 tw-cursor-pointer
                           tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048]
                           tw-transition-all tw-w-full"
				data-target="ksrAcc1">
				<span class="tw-w-7 tw-h-7 tw-rounded-lg tw-flex tw-items-center tw-justify-center
                             tw-text-xs tw-shrink-0 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
					<i class="fas fa-heart"></i>
				</span>
				Our Foundation
				<svg class="ksr-mob-chev tw-w-4 tw-h-4 tw-ml-auto tw-shrink-0 tw-text-gray-400"
					viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
				</svg>
			</button>
			<div class="ksr-acc-panel tw-px-5 tw-pb-3 tw-bg-[rgba(210,0,72,0.03)]" id="ksrAcc1">
				@foreach([
				[route('our-foundation'), 'Dr. K. Shilpi Reddy Foundation'],
				[route('fertility-conclave'),'Natural Fertility Conclave'],
				['#', 'Women Empowerment'],
				['#', 'Social Outreach'],
				] as $i => $al)
				<a href="{{ $al[0] }}"
					class="ksr-close-on-click tw-flex tw-items-center tw-gap-2 tw-py-2.5
                          tw-text-sm tw-no-underline tw-transition-colors
                          tw-text-[#52656d] hover:tw-text-[#D20048]
                          tw-border-t tw-border-[rgba(210,0,72,0.07)]
                          @if($i===0) tw-border-t-0 tw-pt-2 @endif">
					<i class="fas fa-chevron-right tw-text-[10px] tw-shrink-0 tw-text-[#D20048]"></i>
					{{ $al[1] }}
				</a>
				@endforeach
			</div>
		</li>

		{{-- Ibu Care accordion --}}
		<li class="tw-border-b tw-border-gray-100">
			<button class="ksr-acc-btn tw-flex tw-items-center tw-gap-3 tw-px-5 tw-py-3.5
                           tw-text-sm tw-font-medium tw-bg-transparent tw-border-0 tw-cursor-pointer
                           tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048]
                           tw-transition-all tw-w-full"
				data-target="ksrAcc2">
				<span class="tw-w-7 tw-h-7 tw-rounded-lg tw-flex tw-items-center tw-justify-center
                             tw-text-xs tw-shrink-0 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
					<i class="fas fa-baby"></i>
				</span>
				Ibu Care
				<svg class="ksr-mob-chev tw-w-4 tw-h-4 tw-ml-auto tw-shrink-0 tw-text-gray-400"
					viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
				</svg>
			</button>
			<div class="ksr-acc-panel tw-px-5 tw-pb-3 tw-bg-[rgba(210,0,72,0.03)]" id="ksrAcc2">
				<p class="tw-text-[10px] tw-font-semibold tw-uppercase tw-tracking-widest
                          tw-pt-2 tw-pb-1.5 tw-mb-0 tw-text-[rgba(210,0,72,0.5)]">Maternity Care</p>
				@foreach(['Antenatal Care','Postnatal Support','High-Risk Pregnancy'] as $it)
				<a href="{{ route('ibu-care') }}"
					class="ksr-close-on-click tw-flex tw-items-center tw-gap-2 tw-py-1.5
                          tw-text-sm tw-no-underline tw-transition-colors
                          tw-text-[#52656d] hover:tw-text-[#D20048]">
					<i class="fas fa-chevron-right tw-text-[10px] tw-shrink-0 tw-text-[#D20048]"></i>
					{{ $it }}
				</a>
				@endforeach
				<p class="tw-text-[10px] tw-font-semibold tw-uppercase tw-tracking-widest
                          tw-pt-3 tw-pb-1.5 tw-mb-0 tw-text-[rgba(210,0,72,0.5)]">Gynaecology</p>
				@foreach(['PCOS / PCOD Management','Menstrual Disorders','Hysteroscopy & Laparoscopy'] as $it)
				<a href="{{ route('ibu-care') }}"
					class="ksr-close-on-click tw-flex tw-items-center tw-gap-2 tw-py-1.5
                          tw-text-sm tw-no-underline tw-transition-colors
                          tw-text-[#52656d] hover:tw-text-[#D20048]">
					<i class="fas fa-chevron-right tw-text-[10px] tw-shrink-0 tw-text-[#D20048]"></i>
					{{ $it }}
				</a>
				@endforeach
			</div>
		</li>

		{{-- Services accordion --}}
		<li class="tw-border-b tw-border-gray-100">
			<button class="ksr-acc-btn tw-flex tw-items-center tw-gap-3 tw-px-5 tw-py-3.5
                           tw-text-sm tw-font-medium tw-bg-transparent tw-border-0 tw-cursor-pointer
                           tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048]
                           tw-transition-all tw-w-full"
				data-target="ksrAcc3">
				<span class="tw-w-7 tw-h-7 tw-rounded-lg tw-flex tw-items-center tw-justify-center
                             tw-text-xs tw-shrink-0 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
					<i class="fas fa-stethoscope"></i>
				</span>
				Services
				<svg class="ksr-mob-chev tw-w-4 tw-h-4 tw-ml-auto tw-shrink-0 tw-text-gray-400"
					viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
				</svg>
			</button>
			<div class="ksr-acc-panel tw-px-5 tw-pb-3 tw-bg-[rgba(210,0,72,0.03)]" id="ksrAcc3">
				@foreach([
				['fas fa-user-md', 'Gynaecology'],
				['fas fa-baby', 'Obstetrics'],
				['fas fa-microscope','Fertility'],
				['fas fa-heartbeat', 'Wellness Programs'],
				] as $i => $s)
				<a href="#"
					class="tw-flex tw-items-center tw-gap-2 tw-py-2.5
                          tw-text-sm tw-no-underline tw-transition-colors
                          tw-text-[#52656d] hover:tw-text-[#D20048]
                          @if($i>0) tw-border-t tw-border-[rgba(210,0,72,0.07)] @endif">
					<i class="{{ $s[0] }} tw-w-4 tw-text-center tw-text-[#D20048]"></i>
					{{ $s[1] }}
				</a>
				@endforeach
			</div>
		</li>

	</ul>

	{{-- Drawer footer --}}
	<div class="tw-p-4 tw-shrink-0 tw-bg-gray-50 tw-border-t tw-border-gray-200">
		<a href="tel:+919503606049"
			class="tw-flex tw-items-center tw-justify-center tw-gap-2
                  tw-w-full tw-py-3 tw-rounded-full tw-mb-3
                  tw-bg-[#D20048] hover:tw-bg-[#AA0E39]
                  tw-text-white tw-font-semibold tw-text-sm tw-no-underline tw-transition-colors">
			<i class="fas fa-phone-alt"></i> +91 9503606049
		</a>
		<div class="tw-flex tw-gap-2 tw-justify-center">
			@foreach(['fab fa-instagram','fab fa-youtube','fab fa-linkedin-in','fab fa-facebook-f'] as $ic)
			<a href="#"
				class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center
                      tw-text-white tw-text-sm tw-no-underline tw-transition-colors
                      tw-bg-[#D20048] hover:tw-bg-[#AA0E39]">
				<i class="{{ $ic }}"></i>
			</a>
			@endforeach
		</div>
	</div>

</div>{{-- /drawer --}}

@once
@push('scripts')
<script>
	$(function() {
		'use strict';

		/* ── Desktop mega/drop panels via jQuery ── */
		var $allPanels = $('.ksr-mega, .ksr-drop');
		var closeDelay;

		function openPanel($trigger) {
			var panelId = $trigger.data('panel');
			var $panel = $('#' + panelId);
			if (!$panel.length) return;

			// Close all other panels first
			$allPanels.not($panel).hide().removeClass('ksr-mega-anim');
			$('.ksr-chev').removeClass('ksr-rotated');

			$panel.show().addClass('ksr-mega-anim');
			$trigger.find('.ksr-chev').addClass('ksr-rotated');
		}

		function closeAll() {
			$allPanels.hide().removeClass('ksr-mega-anim');
			$('.ksr-chev').removeClass('ksr-rotated');
		}

		// Mega trigger (Ibu Care — link click opens/closes, hover also works)
		$(document).on('mouseenter', '.ksr-has-mega', function() {
			clearTimeout(closeDelay);
			var $trigger = $(this).find('.ksr-mega-trigger');
			openPanel($trigger);
		});

		$(document).on('mouseleave', '.ksr-has-mega', function() {
			closeDelay = setTimeout(closeAll, 120);
		});

		// Drop trigger (Foundation, Services)
		$(document).on('mouseenter', '.ksr-has-drop', function() {
			clearTimeout(closeDelay);
			var $trigger = $(this).find('.ksr-drop-trigger');
			openPanel($trigger);
		});

		$(document).on('mouseleave', '.ksr-has-drop', function() {
			closeDelay = setTimeout(closeAll, 120);
		});

		// Keep panel open when hovering the panel itself
		$(document).on('mouseenter', '.ksr-mega, .ksr-drop', function() {
			clearTimeout(closeDelay);
		});

		$(document).on('mouseleave', '.ksr-mega, .ksr-drop', function() {
			closeDelay = setTimeout(closeAll, 120);
		});

		// Click outside closes everything
		$(document).on('click', function(e) {
			if (!$(e.target).closest('#ksrNav').length) {
				closeAll();
			}
		});

		/* ── Mobile drawer ── */
		var $drawer = $('#ksrDrawer');
		var $overlay = $('#ksrOverlay');
		var $burger = $('#ksrBurger');
		var $close = $('#ksrClose');

		function openDrawer() {
			$drawer.addClass('ksr-open');
			$overlay.addClass('ksr-open');
			$('body').css('overflow', 'hidden');
			$burger.attr('aria-expanded', 'true');
		}

		function closeDrawer() {
			$drawer.removeClass('ksr-open');
			$overlay.removeClass('ksr-open');
			$('body').css('overflow', '');
			$burger.attr('aria-expanded', 'false');
		}

		$burger.on('click', openDrawer);
		$close.on('click', closeDrawer);
		$overlay.on('click', closeDrawer);
		$(document).on('click', '.ksr-close-on-click', closeDrawer);
		$(document).on('keydown', function(e) {
			if (e.key === 'Escape') closeDrawer();
		});

		/* ── Mobile accordions ── */
		$(document).on('click', '.ksr-acc-btn', function() {
			var targetId = $(this).data('target');
			var $panel = $('#' + targetId);
			var $chev = $(this).find('.ksr-mob-chev');
			var isOpen = $panel.hasClass('ksr-open');

			// Close all accordions
			$('.ksr-acc-panel').removeClass('ksr-open');
			$('.ksr-mob-chev').removeClass('ksr-open');

			// Open clicked one if it was closed
			if (!isOpen) {
				$panel.addClass('ksr-open');
				$chev.addClass('ksr-open');
			}
		});

		/* ── Sticky shadow on scroll ── */
		var $nav = $('#ksrNav');
		$(window).on('scroll.ksrNav', function() {
			$nav.toggleClass('ksr-scrolled', $(window).scrollTop() > 8);
		});
	});
</script>
@endpush
@endonce