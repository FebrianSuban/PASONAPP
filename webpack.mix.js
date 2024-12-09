const mix = require('laravel-mix');

mix.css('resources/css/app.css', 'public/css')
   .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),
   ]);
