
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    livereload = require('gulp-livereload');

/* SASS */
gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cssnano())
        .pipe(sourcemaps.write())
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