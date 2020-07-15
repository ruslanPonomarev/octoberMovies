var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/booking-rooms/assets';
elixir.config.publicPath = 'themes/booking-rooms/assets/compiled';

elixir(function(mix){

	mix.sass('style.scss');

	mix.scripts([
		'jquery.js',
		'app.js'
	]);

	mix.livereload([
		'themes/booking-rooms/assets/compiled/css/style.css',
		'themes/booking-rooms/**/*.htm',
		'themes/booking-rooms/assets/compiled/js/*.js'
		])

})

