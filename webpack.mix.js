const mix = require('laravel-mix');

// Compile CSS
mix.styles([
    'public/fronted/css/animate.css',
    'public/fronted/bootstarp/bootstrap.min.css',
    'public/fronted/css/super-classes.css',
    'public/fronted/css/style.css',
    'public/fronted/css/mobile.css',
    'public/fronted/css/dr_shilpi_css.css',
    'public/fronted/css/owl.carousel.min.css',
    'public/fronted/css/owl.theme.default.min.css',
    'public/fronted/css/jquery.fancybox.min.css',
    'public/fronted/css/custom-style.css'
], 'public/css/all.css');

// Compile JS
mix.scripts([
    'public/fronted/js/jquery-3.6.0.min.js',
    'public/fronted/js/popper.min.js',
    'public/fronted/js/wow.js',
    'public/fronted/js/bootstrap.min.js',
    'public/fronted/js/owl.carousel.min.js',
    'public/fronted/js/isotope.pkgd.min.js',
    'public/fronted/js/jquery.fancybox.js',
    'public/fronted/js/custom-script.js',
], 'public/js/all.js');

// Versioning for cache busting
if (mix.inProduction()) {
    mix.version();
}