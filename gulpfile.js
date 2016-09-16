var gulp         = require('gulp'),
    connect      = require('gulp-connect-php');
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS   	 = require('gulp-clean-css'),
    rename       = require('gulp-rename'),
    browserSync  = require('browser-sync'),
    concat       = require('gulp-concat'),
    uglify       = require('gulp-uglify');
    del 		 = require('del'),
    imagemin 	 = require('gulp-imagemin'),
    pngquant 	 = require('imagemin-pngquant'),
    cache 		 = require('gulp-cache'),
    fileinclude    = require('gulp-file-include'),
    gulpRemoveHtml = require('gulp-remove-html'),
    bourbon        = require('node-bourbon'),
    ftp            = require('vinyl-ftp');

gulp.task('connect-sync', function () {
    connect.server({}, function () {
        browserSync({
            proxy: 'catalog.anycomp/',
            notify: false
        });
    });
});

gulp.task('styles', function () {
    return gulp.src('resources/assets/sass/*.sass')
    .pipe(sass({
        includePaths: require('node-bourbon').includePaths
    }).on('error', sass.logError))
    .pipe(rename({suffix: '.min', prefix : ''}))
    .pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
    .pipe(cleanCSS())
    .pipe(gulp.dest('public/css/'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('scripts', ['scriptlibs'], function() {
    return gulp.src('resources/assets/js/*.js')
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest('public/js/'));
});

gulp.task('scriptlibs', function() {
    return gulp.src([
        'resources/assets/libs/modernizr/modernizr.js',
        'resources/assets/libs/jquery/jquery-1.11.2.min.js',
        'resources/assets/libs/animate/animate-css.js',
        'resources/assets/libs/Magnific-Popup/jquery.magnific-popup.min.js',
        'resources/assets/libs/jQuery.equalHeights/jquery.equalheights.min.js'
    ])
    .pipe(uglify())
    .pipe(concat('libs.js'))
    .pipe(gulp.dest('resources/assets/js'));
});

gulp.task('watch', ['styles', 'scripts', 'connect-sync'],function () {
    gulp.watch('resources/assets/sass/*.sass', ['styles']);
    gulp.watch('./**/*.php', browserSync.reload);
    gulp.watch('./resources/assets/js/*.js', ['scripts'], browserSync.reload);
});

gulp.task('imagemin', function() {
    return gulp.src('public/img/**/*')
    .pipe(cache(imagemin({
        interlaced: true,
        progressive: true,
        svgoPlugins: [{removeViewBox: false}],
        use: [pngquant()]
    })))
    .pipe(gulp.dest('public/img/'));
});

gulp.task('header', function() {
    gulp.src([
        'resources/views/app.php'
    ])
    .pipe(fileinclude({
        prefix: '@@'
    }))
    .pipe(gulpRemoveHtml())
    .pipe(rename('app.blade.php'))
    .pipe(gulp.dest('resources/views/'));
});

gulp.task('clearcache', function () {
    return cache.clearAll();
});

gulp.task('default', ['watch']);