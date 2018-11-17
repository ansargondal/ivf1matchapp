let gulp = require('gulp'),
    sass = require('gulp-sass'),
    header = require('gulp-header'),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync').create();


gulp.task('vendor', function () {
    gulp.src('./resources/assets/vendor/**/**/*').pipe(
        gulp.dest('./public/vendor')
    )
});

gulp.task('copy:images', function () {
    gulp.src('./resources/assets/img/**/*').pipe(
        gulp.dest('./public/img')
    )
});

// Compile SCSS
gulp.task('css:compile', function () {
    return gulp.src('./resources/assets/scss/*.scss')
        .pipe(sass.sync({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(gulp.dest('./public/css' +
            ''));
});

// Minify CSS
gulp.task('css:minify', ['css:compile'], function () {
    return gulp.src([
        './public/css/*.css',
        '!./public/css/*.min.css'
    ])
        .pipe(cleanCSS())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./public/css'))
        .pipe(browserSync.stream());
});

// CSS
gulp.task('css', ['css:compile', 'css:minify']);


//copy js files
gulp.task('js:copy', function () {
    gulp.src('./resources/assets/js/**/*.js').pipe(rename({
        suffix: '.min'
    })).pipe(gulp.dest('./public/js'));
});

// Minify JavaScript
gulp.task('js:minify', function () {
    return gulp.src([
        './public/js/*.js',
        '!./public/js/*.min.js'
    ])
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./public/js'))
        .pipe(browserSync.stream());
});


// JS
gulp.task('js', ['js:copy', 'js:minify']);

// Default task
gulp.task('default', ['css', 'js', 'vendor', 'copy:images']);


// Configure the browserSync task
gulp.task('browserSync', function () {
    browserSync.init({
        proxy: 'ivf1match.app',
        notify: false
    });
});

// Dev task
gulp.task('dev', ['css', 'js', 'browserSync'], function () {
    gulp.watch('./resources/assets/scss/*.scss', ['css']);
    gulp.watch('./resources/assets/js/*.js', ['js:copy', 'js:minify']);
    gulp.watch('./resources/views/**/*.php', browserSync.reload);
});



