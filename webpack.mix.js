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

// Laravelmix: Sistema que instalamos en laravel para definir 
// el paso a paso de compilación de webpack utilizando un método de encadenamiento
mix.scripts([
		'resources/assets/js/jquery-3.2.1.js',
		'resources/assets/js/bootstrap.js',
		'resources/assets/js/toastr.js',
		'resources/assets/js/vue.js',
		'resources/assets/js/axios.js',
		'resources/assets/js/app.js'
	], 'public/js/app.js')
	.styles([
		'resources/assets/css/bootstrap.css',
		'resources/assets/css/toastr.css'
	], 'public/css/app.css');