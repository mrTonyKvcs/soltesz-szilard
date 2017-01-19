const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix
    	.styles([
    		'preload.min.css',
    		'plugins.min.css',
    		'style.blue-500.min.css'
    	])
    	.scripts([
    		'plugins.min.js',
    		'app.min.js',
    		'index.js'
    	])
    	.copy('resources/assets/img', 'public/img')
    	.copy('resources/assets/fonts', 'public/fonts')
    	.copy('resources/assets/media', 'public/media')
    	.version('css/all.css');
    	// .sass('app.scss')
       // .webpack('app.js');
});
