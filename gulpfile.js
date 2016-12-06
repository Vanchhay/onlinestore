const elixir = require('laravel-elixir');

// require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass(['style.scss'],'public/css/styles.css')
       .webpack(['app.js'],'public/js/libs.js')
       .scripts(['components/main.js', 
       			'components/useful.js', 
       			'components/analytics.js'], 
       			'public/js/scripts.js')
       .browserSync({
        	proxy: 'onlinestore.dev'
    	});
});
