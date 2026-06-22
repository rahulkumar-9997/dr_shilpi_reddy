@once
@php
    $menuItems = [
        ['title' => 'About', 'url' => route('about-us'), 'blank' => false],
        ['title' => 'Mrs. Mom', 'url' => 'https://mrsmomevent.com/', 'blank' => true],
        ['title' => 'Work', 'url' => route('work'), 'blank' => false],
        ['title' => 'Media', 'url' => route('media'), 'blank' => false],
        ['title' => 'Blog', 'url' => route('blog'), 'blank' => false],
        ['title' => 'Contact', 'url' => route('contact-us'), 'blank' => false],
    ];
@endphp
@endonce
<nav id="ksrNav" class="tw-sticky tw-top-0 tw-z-[1050] tw-bg-[#D20048] tw-transition-shadow tw-duration-300">
	<div class="tw-flex tw-items-center tw-justify-between tw-h-16 md:tw-h-[70px]">
		<a href="{{ URL::to('/') }}"
			class="tw-flex tw-items-center tw-gap-2 tw-shrink-0 tw-min-w-0 tw-no-underline">
			<img src="{{ asset('fronted/shilpi-img/logo_white.png') }}"
				alt="Dr. K. Shilpi Reddy" width="150" height="64"
				class="tw-w-[230px] sm:tw-w-[220px] md:tw-w-[250px] lg:tw-w-[300px] tw-h-auto tw-transition-all tw-duration-300 tw-ease-in-out"
				loading="lazy">
		</a>
		<ul class="tw-hidden lg:tw-flex tw-items-center tw-gap-0.5 tw-list-none tw-mb-0 tw-pl-0">
			@foreach($menuItems as $menu)
			<li class="tw-list-none">
				<a href="{{ $menu['url'] }}"
					@if($menu['blank']) target="_blank" @endif
					class="tw-flex tw-items-center tw-gap-1 tw-text-[17px] tw-font-medium tw-px-3 tw-py-2 tw-rounded-lg tw-no-underline tw-whitespace-nowrap tw-text-white/90 hover:tw-text-white hover:tw-bg-white/10 tw-transition-all hover:tw-no-underline">
					{{ $menu['title'] }}
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
			@if(!empty($services) && $services->count() > 0)
			<li class="ksr-has-mega tw-relative tw-list-none"> 
				<a href="{{ route('services.index') }}" class="ksr-mega-trigger tw-flex tw-items-center tw-gap-1 tw-text-[17px] tw-font-medium tw-px-3 tw-py-2 tw-rounded-lg tw-no-underline tw-whitespace-nowrap tw-text-white/90 hover:tw-text-white hover:tw-bg-white/10 tw-transition-all hover:tw-no-underline" data-panel="panelIbuCare"> Services 
					<svg class="ksr-chev tw-w-3.5 tw-h-3.5 tw-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
					</svg> 
				</a>
				<div id="panelIbuCare" class="ksr-mega ksr-mega-ibucare">
					<div class="add-menu-left mega-sub-menu">
						<div class="add-menu-left">
							<ul>
								@foreach($services as $service)
								<li>
									<a  href="{{ route('service.details', $service->slug) }}" class="tw-flex tw-items-start tw-gap-2 tw-px-3 tw-py-1.5 tw-rounded-xl tw-text-[17px] tw-no-underline tw-transition-all  tw-text-[#52656d] hover:tw-bg-[rgba(210,0,72,0.05)] hover:tw-text-[#D20048] hover:tw-no-underline">
										<i class="fas fa-chevron-right tw-text-[10px] tw-mt-[8px] tw-shrink-0 tw-text-[#D20048]"></i>
										{{ $service->title }}
									</a>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</li>
			@endif
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
<div id="ksrDrawer" class="tw-fixed tw-top-0 tw-bottom-0 tw-bg-white tw-z-[9999] tw-flex tw-flex-col tw-overflow-y-auto tw-shadow-2xl" role="dialog" aria-modal="true" aria-label="Site navigation">
	<div class="tw-flex tw-items-center tw-justify-between tw-px-5 tw-py-4 tw-shrink-0 tw-bg-[#D20048]">
		<a href="{{ URL::to('/') }}"
			class="tw-flex tw-items-center tw-gap-2 tw-shrink-0 tw-min-w-0 tw-no-underline">
			<img src="{{ asset('fronted/shilpi-img/logo_white.png') }}"
				alt="Dr. K. Shilpi Reddy" width="150" height="64"
				class="tw-w-[200px] sm:tw-w-[220px] md:tw-w-[250px] tw-h-auto tw-ransition-all tw-duration-300 tw-ease-in-out"
				loading="lazy">
		</a>
		<button id="ksrClose" aria-label="Close menu" class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center tw-text-white tw-text-lg tw-border-0 tw-cursor-pointer tw-shrink-0 tw-bg-white/20 hover:tw-bg-white/35 tw-transition-all">✕</button>
	</div>
	<div class="tw-flex tw-items-center tw-justify-around tw-py-2 tw-shrink-0tw-bg-[rgba(210,0,72,0.04)] tw-border-b tw-border-[rgba(210,0,72,0.1)]">
		<a href="tel:+919503606049" class="tw-flex tw-flex-col tw-items-center tw-gap-0.5 tw-text-[11px] tw-font-medium tw-no-underline tw-text-[#D20048] hover:tw-opacity-75 tw-transition-opacity">
			<span class="tw-w-8 tw-h-8 tw-rounded-full tw-flex tw-items-center tw-justify-center tw-mb-0.5 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
				<i class="fas fa-phone-alt"></i>
			</span>Call
		</a>
		<a href="https://wa.me/919503606049?text={{ urlencode('Hi Dr. Shilpi, I would like to know more about your services.') }}" class="tw-flex tw-flex-col tw-items-center tw-gap-0.5 tw-text-[11px] tw-font-medium tw-no-underline tw-text-green-600 hover:tw-opacity-75 tw-transition-opacity">
			<span class="tw-w-8 tw-h-8 tw-rounded-full tw-flex tw-items-center tw-justify-center tw-mb-0.5 tw-bg-green-100 tw-text-green-600">
				<i class="fab fa-whatsapp"></i>
			</span>WhatsApp
		</a>
		<a href="{{ route('contact-us') }}" class="ksr-close-on-click tw-flex tw-flex-col tw-items-center tw-gap-0.5 tw-text-[11px] tw-font-medium tw-no-underline tw-text-[#D20048] hover:tw-opacity-75 tw-transition-opacity">
			<span class="tw-w-8 tw-h-8 tw-rounded-full tw-flex tw-items-center tw-justify-center tw-mb-0.5 tw-bg-[rgba(210,0,72,0.1)] tw-text-[#D20048]">
				<i class="fas fa-calendar-check"></i>
			</span>Book an Appointment
		</a>
	</div>
	<ul class="tw-list-none tw-mb-0 tw-pl-0 tw-flex-1">
		@foreach($menuItems as $menu)
		<li class="tw-border-b tw-border-gray-100">
			<a href="{{ $menu['url'] }}"
			@if($menu['blank']) target="_blank" @endif
			class="ksr-close-on-click tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all">				
				{{ $menu['title'] }}
			</a>
		</li>
		@endforeach
		
		<li class="tw-border-b tw-border-gray-100">
			<button class="ksr-acc-btn tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all focus:tw-outline-none focus:tw-ring-0"
				data-target="ksrAcc1">
				Our Foundation
				<svg class="ksr-mob-chev tw-w-4 tw-h-4 tw-ml-auto tw-shrink-0 tw-text-gray-400"
					viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
				</svg>
			</button>
			<div class="ksr-acc-panel tw-px-5 tw-pb-3 tw-bg-[rgba(210,0,72,0.03)]" id="ksrAcc1">
				<a href="{{ route('our-foundation') }}"
				 class="ksr-close-on-click tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all">
					Dr. K. Shilpi Reddy Foundation
				</a>
				<a href="{{ route('fertility-conclave') }}"
					class="ksr-close-on-click tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all">
					Natural Fertility Conclave
				</a>
			</div>
		</li>
		<li class="tw-border-b tw-border-gray-100">
			<a href="{{ route('ibu-care') }}"
			class="ksr-close-on-click tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all">				
				Ibu Care
			</a>
		</li>

		<li class="tw-border-b tw-border-gray-100">
			<button class="ksr-acc-btn tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all focus:tw-outline-none focus:tw-ring-0"
				data-target="ksrAcc3">				
				Services
				<svg class="ksr-mob-chev tw-w-4 tw-h-4 tw-ml-auto tw-shrink-0 tw-text-gray-400"
					viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
					<polyline points="6 9 12 15 18 9" />
				</svg>
			</button>
			<div class="ksr-acc-panel tw-px-5 tw-pb-3 tw-bg-[rgba(210,0,72,0.03)]" id="ksrAcc3">
				@foreach($services as $service)
				<a href="{{ route('service.details', $service->slug) }}"
					class="tw-flex tw-items-center tw-px-5 tw-py-3.5 tw-text-[17px] tw-font-medium tw-no-underline tw-w-full !tw-text-heading-secondary hover:tw-bg-[rgba(210,0,72,0.04)] hover:tw-text-[#D20048] tw-transition-all">
					{{ $service->title }}
				</a>
				@endforeach
			</div>
		</li>
	</ul>
	@php
    $socialLinks = 
		[
			[
				'icon' => 'fab fa-facebook-f',
				'url' => 'https://www.facebook.com/Dr.k.shilpireddy',
			],
			[
				'icon' => 'fab fa-instagram',
				'url' => 'https://www.instagram.com/dr.k.shilpireddy/?hl=en',
			],
			[
				'icon' => 'fab fa-linkedin-in',
				'url' => 'https://www.linkedin.com/in/drkshilpireddy',
			],
			[
				'icon' => 'fab fa-youtube',
				'url' => 'https://www.youtube.com/@drkshilpireddy',
			],			
		];
	@endphp
	<div class="tw-p-4 tw-shrink-0 tw-bg-gray-50 tw-border-t tw-border-gray-200">		
		<div class="tw-flex tw-gap-2 tw-justify-between">
			@foreach($socialLinks as $social)
				<a href="{{ $social['url'] }}"
				target="_blank"
				rel="noopener noreferrer"
				class="tw-w-9 tw-h-9 tw-rounded-full tw-flex tw-items-center tw-justify-center tw-text-white tw-text-sm tw-no-underline tw-transition-colors tw-bg-[#D20048] hover:tw-bg-[#AA0E39]">
					<i class="{{ $social['icon'] }}"></i>
				</a>
			@endforeach
		</div>
	</div>
</div>
@once
@push('scripts')
<script>
	$(function() {
		'use strict';
		var $allPanels = $('.ksr-mega, .ksr-drop');
		var closeDelay;
		function openPanel($trigger) {
			var panelId = $trigger.data('panel');
			var $panel = $('#' + panelId);
			if (!$panel.length) return;
			$allPanels.not($panel).hide().removeClass('ksr-mega-anim');
			$('.ksr-chev').removeClass('ksr-rotated');
			$panel.show().addClass('ksr-mega-anim');
			$trigger.find('.ksr-chev').addClass('ksr-rotated');
		}
		function closeAll() {
			$allPanels.hide().removeClass('ksr-mega-anim');
			$('.ksr-chev').removeClass('ksr-rotated');
		}
		$(document).on('mouseenter', '.ksr-has-mega', function() {
			clearTimeout(closeDelay);
			var $trigger = $(this).find('.ksr-mega-trigger');
			openPanel($trigger);
		});

		$(document).on('mouseleave', '.ksr-has-mega', function() {
			closeDelay = setTimeout(closeAll, 120);
		});
		$(document).on('mouseenter', '.ksr-has-drop', function() {
			clearTimeout(closeDelay);
			var $trigger = $(this).find('.ksr-drop-trigger');
			openPanel($trigger);
		});

		$(document).on('mouseleave', '.ksr-has-drop', function() {
			closeDelay = setTimeout(closeAll, 120);
		});
		$(document).on('mouseenter', '.ksr-mega, .ksr-drop', function() {
			clearTimeout(closeDelay);
		});
		$(document).on('mouseleave', '.ksr-mega, .ksr-drop', function() {
			closeDelay = setTimeout(closeAll, 120);
		});
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
			$('.ksr-acc-panel').removeClass('ksr-open');
			$('.ksr-mob-chev').removeClass('ksr-open');
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