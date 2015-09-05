var gulp = require('gulp'),
// File manipulation
    del = require('del'),
// Sass & CSS
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    csso = require('gulp-csso'),
    uncss = require('gulp-uncss'),
// Servers
    browserSync = require('browser-sync');

// Tasks

gulp.task('default', ['server']);

// Sass & CSS Tasks

gulp.task('sass', function() {
  return gulp.src('./assets/stylesheets/*.scss')
    .pipe(sass({
      includePaths: require('node-neat').includePaths
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(uncss({
      html: ['http://phenotonic.dev/']
    }))
    .pipe(autoprefixer())
    .pipe(csso())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('sass:debug', function() {
  return gulp.src('./assets/stylesheets/*.scss')
    .pipe(sass({
      outputStyle: 'nested',
      includePaths: require('node-neat').includePaths
    }))
    .pipe(sass().on('error', sass.logError))
    .pipe(uncss({
      html: ['http://phenotonic.dev/']
    }))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('sass:clean', function() {
  del('./assets/css');
});

// Server Tasks

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "phenotonic.dev"
    });
});

gulp.task('server', ['sass'], function() {
  browserSync.init({
    proxy: "phenotonic.dev"
  });

  gulp.watch('./assets/stylesheets/**/*.scss', ['sass']);
  gulp.watch(['./site/**/*.php', './content/**/*.txt']).on('change', browserSync.reload);
});

// Watch

gulp.task('watch', ['server']);
