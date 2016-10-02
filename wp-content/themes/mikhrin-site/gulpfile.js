"use strict";

var gulp = require('gulp'),
    rename = require("gulp-rename"),
    autoprefixer = require('gulp-autoprefixer'),
    uncss = require('gulp-uncss'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');


gulp.task('sass', function () {
    gulp.src('src/sass/import.scss')
        .pipe(sass().on('error', sass.logError))
        // .pipe(uncss({ html: ['*.php', 'inc/*.php', 'template-parts/*.php'] }))
        .pipe(autoprefixer({ browsers: ['> 1%', 'IE 7'], cascade: false }))
        .pipe(cleanCSS({compatibility: ''}))
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('dist/css/'));
});

gulp.task('bootstrap', function () {
    gulp.src('src/lib/bootstrap.css')
        .pipe(autoprefixer({ browsers: ['> 1%', 'IE 7'], cascade: false }))
        .pipe(cleanCSS({compatibility: ''}))
        .pipe(rename('bootstrap.min.css'))
        .pipe(gulp.dest('dist/css/'));
});

gulp.task('scripts', function() {
    return gulp.src(['src/js/main.js', 'src/js/general.js'])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/'));
});

gulp.task('watch', function () {
    gulp.watch('src/sass/**/*.scss', ['sass']);
    gulp.watch(['*.php', 'inc/*.php', 'template-parts/*.php'], ['bootstrap']);
    gulp.watch('src/js/**/*.js', ['scripts']);
});

gulp.task('default', ['sass','bootstrap', 'scripts', 'watch']);