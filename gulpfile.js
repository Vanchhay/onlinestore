const elixir = require('laravel-elixir');
const BrowserSync = require('laravel-elixir-browsersync');
const gulp = require('gulp');
const sass = require('gulp-sass');
const bs = require('browser-sync').create(); // create a browser sync instance.
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
       			'public/js/scripts.js');
});

gulp.task('browser-sync', ()=> {
    bs.init({
        
        proxy: "localhost:8000"
       
    });
});

gulp.task('sass', ()=> {
    return gulp.src('sass/*.scss')
                .pipe(sass())
                .pipe(gulp.dest('css'))
                .pipe(bs.reload({stream: true})); // prompts a reload after compilation
});

gulp.task('watch', ()=> {
    gulp.watch("sass/*.scss", ['sass']);
    gulp.watch("*.html").on('change', bs.reload);
});