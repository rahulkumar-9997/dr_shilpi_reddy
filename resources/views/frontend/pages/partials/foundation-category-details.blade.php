@if(isset($foundation_category)) 
    <div class="row grid-services-foundation media-box-image">
        @foreach($foundation_category->foundationImages as $image)
            <div class="col-lg-4 col-md-4 px-1">
                <article class="single_blog agree_bazar_image">
                    <figure>
                        <div class="blog_thumb border border-radius">
                            <a class="lightbox" title="{{ $foundation_category->name }}" data-fancybox="images-1" data-caption="" href="{{ asset('foundation-img/'.$image->image_path) }}">
                                <div class="media">
                                    <img src="{{ asset('foundation-img/'.$image->image_path) }}" alt="{{ $foundation_category->name }}" class="img-responsive main-img">
                                </div>
                            </a>
                        </div>
                    </figure>
                </article>
            </div>
        @endforeach
    </div>
@endif