const mix = require('laravel-mix');

// Frontend
mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');

// Dashboard
mix.css('resources/css/backend.css', 'public/css');
mix.js('resources/js/backend.js', 'public/js');

