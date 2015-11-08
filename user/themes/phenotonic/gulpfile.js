var gulp   = require('gulp'),
// File manipulation
    del    = require('del'),
// Sass & CSS
    sass   = require('gulp-sass'),
    prefix = require('gulp-autoprefixer'),
    cmq    = require('gulp-combine-media-queries'),
    csso   = require('gulp-csso');

// Tasks

gulp.task('default', ['sass']);

// Sass & CSS Tasks

gulp.task('sass', function() {
  return gulp.src('stylesheets/*.scss')
    .pipe(sass({
      includePaths: require('node-neat').includePaths
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix())
    .pipe(cmq())
    .pipe(csso())
    .pipe(gulp.dest('css'));
});

gulp.task('sass:debug', function() {
  return gulp.src('stylesheets/*.scss')
    .pipe(sass({
      outputStyle: 'nested',
      includePaths: require('node-neat').includePaths
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix())
    .pipe(cmq())
    .pipe(gulp.dest('css'));
});

gulp.task('sass:clean', function() {
  del('css');
});
