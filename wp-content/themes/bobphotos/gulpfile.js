require('es6-promise').polyfill();

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rtlcss       = require('gulp-rtlcss');
var rename       = require('gulp-rename');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;


var onError = function (err) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};

gulp.task('sass', function() {
	return gulp.src('./src/sass/style.scss')
	.pipe(plumber({ errorHandler: onError }))
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(gulp.dest('./'))              // Output LTR stylesheets (style.css)
    .pipe(rtlcss())                     // Convert to RTL
    .pipe(rename({ basename: 'rtl' }))  // Rename to rtl.css
    .pipe(gulp.dest('./'));             // Output RTL stylesheets (rtl.css)
});

gulp.task('js', function() {
  return gulp.src(['./js/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
});

gulp.task('images', function() {
  return gulp.src('./src/img/src/*')
    .pipe(plumber({errorHandler: onError}))
    .pipe(imagemin({optimizationLevel: 7, progressive: true}))
    .pipe(gulp.dest('./src/img/dist'));
});

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass', reload]);
    gulp.watch('./js/*js', ['js', reload]);
    gulp.watch('src/img/*', ['images', reload]);
    browserSync.init({
      files: ['./**/*.php'],
      proxy: 'localhost',
    });
});


// default task
gulp.task('default', ['sass', 'js', 'images', 'watch']);
