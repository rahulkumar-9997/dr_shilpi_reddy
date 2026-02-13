<!-- JS here -->
<script src="{{asset('fronted/js/jquery-3.6.0.min.js')}}"> </script>
<script src="{{asset('fronted/js/popper.min.js')}}"> </script>
<script src="{{asset('fronted/js/wow.js')}}"></script>
<script>
   new WOW().init();
</script>
<script src="{{asset('fronted/js/bootstrap.min.js')}}"> </script>
<script src="{{asset('fronted/js/custom-script.js')}}?v={{ env('ASSET_VERSION', '1.0.0') }}"> </script>
<script src="{{asset('fronted/js/owl.carousel.min.js')}}"> </script>
<script src="{{asset('fronted/js/isotope.pkgd.min.js')}}"> </script>
<script src="{{asset('fronted/js/jquery.fancybox.js')}}"> </script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

<script src="{{asset('fronted/js/dr-shilpi.js')}}?v={{ env('ASSET_VERSION', '1.0.0') }}"> </script>
@stack('scripts')