const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/admin-lte/', './public/vendor/admin-lte/', false);

mix.copy('node_modules/underscore/underscore-min.js', './public/vendor/underscore/underscore-min.js', false);

mix.copy('node_modules/toastify-js/src/', './public/vendor/toastify-js/', false);

