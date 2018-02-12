var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');

var uglify = require('gulp-uglify');
 
gulp.task('css', function () {
	gulp.src('style.css')
		.pipe(autoprefixer())
		.pipe(cssmin())
		.pipe(gulp.dest('build'));
});

gulp.task('compress', function() {
  return gulp.src('js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('build/js'));
});

gulp.task('watchcss', function() {
	gulp.watch('style.css', ['css']);
});