<nav class="navbar navbar-expand-lg navbar-light mobile_nav">
	<a class="navbar-brand desktop-logo" href="{{URL::to('/')}}">
		<img src="{{asset('fronted/shilpi-img/logo_white.png')}}" alt="logo-img" class="img-fluid" loading="lazy">
	</a>
	<button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		<span class="navbar-toggler-icon"></span>
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<div class="navbar-toggler-mobile menu_togler_div">
			<button class="menu-toggler close_btn" type="button">X</button>
		</div>
		<ul class="navbar-nav ml-auto mr-auto">
			<li class="nav-item active ">
				<a class="nav-link p-0 text-white" href="{{route('about-us')}}">About<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-0 text-white" target="_blank" href="https://mrsmomevent.com/">Mrs. Mom</a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-0 text-white" href="{{route('work')}}">Work</a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-0 text-white" href="{{route('media')}}">Media </a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-0 text-white" href="{{route('blog')}}"> Blog </a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-0 text-white" href="{{route('contact-us')}}"> Contact </a>
			</li>
			<li class="nav-item dropdown pr-lg-0 drop-down-menu-lg">
				<a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Our Foundation
				</a>
				<div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('our-foundation') }}">Dr. K. Shilpi Reddy Foundation</a>
					<a class="dropdown-item" href="{{ route('fertility-conclave') }}">Fertility Conclave</a>					
				</div>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link p-0 text-white" href="{{route('our-foundation')}}">
				Our Foundation 
				</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link p-0 text-white" href="{{route('ibu-care')}}">Ibu Care</a>
			</li>
			<!--<li class="nav-item dropdown pr-lg-0">
	     <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	       Blog
	     </a>
	     <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
	       <a class="dropdown-item" href="faq.html">Faq</a>
	       <a class="dropdown-item" href="four-column.html">four-column</a>
	       <a class="dropdown-item" href="infinite-scroll.html">infinite-scroll</a>
	       <a class="dropdown-item" href="load-more.html">load-more</a>
	       <a class="dropdown-item" href="one-column.html">one-column</a>
	       <a class="dropdown-item" href="six-colum-full-wide.html">six-colum-full-wide</a>
	       <a class="dropdown-item" href="three-column.html">three-colum-sidbar</a>
	       <a class="dropdown-item" href="three-colum-sidbar.html">three-column</a>
	       <a class="dropdown-item" href="two-column.html">two-column</a>
	     </div>
	   </li>-->
		</ul>
		<!--<a href="tel:+12345678" class="navbar-btn text-white">
       <i class="fas fa-phone-volume"></i>
       +1 234 56 78
       </a>-->

	</div>
	<div class="menu-overlay"></div>
</nav>