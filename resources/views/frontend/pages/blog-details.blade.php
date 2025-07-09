
@extends('frontend.layouts.master')
@php
	if($blog->meta_title)
	{
		$meta_title = $blog->meta_title;
	}
	else
	{
		$meta_title = $blog->title;
	}
	if($blog->meta_description)
	{
		$meta_description = $blog->meta_description;
	}
	else
	{
		$meta_description = substr($blog->intro_description, 0, 70);
	}
	$meta_keywords = 'Our Blogs, Hyderabad, Dr. K. Shilpireddy Hyderabad, Dr. K. Shilpireddy, photo';
@endphp
@section('title', "$meta_title")
@section('description', $meta_description)
@section('keywords', $meta_keywords)

@section('main-content')
<div class="w-100 float-left header-and-banner-con-bg banner-overlay-img pa-main-header">
	<div class="container">
		<div class="overlay-img">
			<!-- navbar-start -->
			@include('frontend.layouts.header-menu')
			<!-- navbar-end -->

		</div>
	</div>
</div>
<div class="w-100 float-left header-and-banner-con banner-overlay-img breadcrub">
	<div class="container">
		<div class="overlay-img">
			<section>
				<div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
					<div class="container">
						<div class="generic-banner-content text-white text-center">
							<h1 class="blogh1">{{$blog->title}}</h1>
							<!-- <p class="text-white mb-0">{{$blog->title}}</p> -->
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>



<section>
	<div class="w-100 float-left professional-con">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-11 primary right-sidebar blog_details">
					<div class="professional-title single-post single">
						@if($blog->blog_post_date)
							<ul class="meta ospm-default clr">
								<li class="meta-date">
									<i class="fa fa-clock" aria-hidden="true"></i>
									{{ \Carbon\Carbon::parse($blog->blog_post_date)->format('F d, Y') }}
								</li>							
							</ul>
						@endif
						@if($blog->blog_intro_head)
						<div class="entry-header clr">
							<h1 class="entry-title-blog">
								{!! $blog->blog_intro_head !!}
							</h1>
						</div>
						@endif
						
						<div class="blog-details-new">
							{!! $blog->blog_description !!}
						</div>
					</div>
					<div class="professional-box">
						<div class="row grid-services">
							@if ($blog->images->isNotEmpty())
							@foreach ($blog->images as $image)
							<div class="col-lg-4 col-md-4 px-2">
								<article class="single_blog agree_bazar_image">
									<figure>
										<div class="blog_thumb">
											<a class="lightbox" title="" data-fancybox="images-1" data-caption="" href="{{ asset('blog-img/main-img/' . $image->blog_image) }}">
												<div class="media">
													<img src="{{ asset('blog-img/main-img/' . $image->blog_image) }}" alt="" class="img-responsive main-img">
												</div>
											</a>
										</div>
									</figure>
								</article>
							</div>
							@endforeach

							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection