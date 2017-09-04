const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/lightbox2/dist/css/lightbox.min.css','public/css')
    .copy('node_modules/lightbox2/dist/js/lightbox.min.js','public/js')
    .copy('node_modules/lightbox2/dist/images/*','public/images')
    .mix.version();