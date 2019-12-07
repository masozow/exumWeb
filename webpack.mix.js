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

mix.js([
	'resources/js/jquery.js',
	'resources/js/jquery.isotope.js',
	'resources/js/bootstrap.js',
	'resources/js/toastr.js',
	'resources/js/SmoothScroll.js',
	'resources/js/owl.carousel.js',
	'resources/js/main.js',
	'resources/js/vue.js',
	'resources/js/axios.js',	
	'resources/js/app.js'
	], 'public/js/app.js')
	.styles([
	'resources/css/bootstrap.css',
	'resources/css/toastr.css',
	'resources/css/animate.css',
	'resources/css/owl.carousel.css',
	'resources/css/owl.theme.css',
	'resources/css/style.css',
	'resources/css/responsive.css'
	],'public/css/app.css');
