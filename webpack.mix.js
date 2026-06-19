const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/fronted/js')
   .postCss('resources/css/app.css', 'public/fronted/css', [
       require('tailwindcss'),
   ])
   .version();