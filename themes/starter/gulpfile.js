
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    merge = require('merge-stream'),
    concat = require('gulp-concat'),
    livereload = require('gulp-livereload');

var config = {
  bootstrapPath: 'node_modules/bootstrap-sass/assets/stylesheets/',
  icheck: 'node_modules/icheck/skins/minimal/minimal.css',
  slick: 'node_modules/slick-carousel/slick/slick.css',
  slicktheme: 'node_modules/slick-carousel/slick/slick-theme.css',
  chosen: 'node_modules/chosen-js/chosen.css'
}

/* SASS */
gulp.task('sass', function () {

    var sassStream =
    gulp.src('sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
          includePaths: [
            config.bootstrapPath
          ]
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(sourcemaps.write());

    var cssStream =
    gulp.src([config.slick, config.slicktheme, config.icheck, config.chosen]);

    return merge(sassStream, cssStream)
        .pipe(concat('main.min.css'))
        .pipe(cssnano())
        .pipe(gulp.dest('css'))
        .pipe(livereload());
});

/* Default */
gulp.task('default', ['sass'])

/* Watch */
gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('sass/**/*.scss', ['sass']);
})
