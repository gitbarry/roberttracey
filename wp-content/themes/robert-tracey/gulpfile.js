/**
 * Created by barrypoore on 06/10/2016.
 */
'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sassGlob = require('gulp-sass-glob'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify');

gulp.task('compress', function (cb) {
    pump([
            gulp.src('scripts/*.js'),
            uglify(),
            gulp.dest('scripts/dist')
        ],
        cb
    );
});

gulp.task('images', () =>
gulp.src('images/*')
    .pipe(imagemin())
    .pipe(gulp.dest('images'))
);

gulp.task('sass', function () {
    return gulp.src('sass/**/*.scss')

        .pipe(sassGlob())
        .pipe(sourcemaps.write())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(''));
});

gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
});


gulp.task('build', function() {
    return gulp.src('css/style.css')
        .pipe(cleanCSS({compatibility: 'ie9'}))
        .pipe(gulp.dest('/'));
});
