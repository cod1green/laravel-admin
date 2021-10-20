const mix = require('laravel-mix');

// Frontend
mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');

// Backend
mix.css('resources/css/backend.css', 'public/css');
mix.js('resources/js/backend.js', 'public/js');
// mix.copy('node_modules/admin-lte/', './public/vendor/admin-lte/', false);

