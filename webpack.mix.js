const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/back.js', 'public/js/back')
    .js('resources/js/front.js', 'public/js/front')
    .sass('resources/sass/back-custom.scss', 'public/css/back')
    .sass('resources/sass/front-custom.scss', 'public/css/front')
    .scripts([

    ], 'public/js/back/main.js')
    .scripts([
        
    ], 'public/js/front/main.js')
    .styles([
        'public/css/back/style.css'
    ], 'public/css/back/main.css')
    .styles([
        'public/css/front/style.css'
    ], 'public/css/front/main.css');

//Live reload of browser
mix.browserSync('http://127.0.0.1:8000');