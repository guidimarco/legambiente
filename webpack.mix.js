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

mix.js('resources/js/appPublic.js', 'public/js')
.js('resources/js/appDashboard.js', 'public/js')
.sass('resources/sass/appPublic.scss', 'public/css')
.sass('resources/sass/appDashboard.scss', 'public/css');
