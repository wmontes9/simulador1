let mix = require('laravel-mix');

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
mix.scripts([
   'resources/assets/js/vue.js',
   'resources/assets/js/axios.js',     
   'resources/assets/js/all.js',
   'resources/assets/js/jquery.js',   
   'resources/assets/js/bootstrap.min.js',
   'resources/assets/js/main.js',   
],'public/js/app.js').styles([
   'resources/assets/css/bootstrap.min.css',
   'resources/assets/css/all.css'
],'public/css/app.css');
