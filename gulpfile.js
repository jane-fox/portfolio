
// Packages we're using. Installs with 'npm install'
var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-csso');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');



// the /**/ will include all subdirectories
var js_dir = "js/**/*.js";

// this {} will select both types of files
//var css_dir = "css/**/*.{scss,css}";
var css_dir = [
	"sass/style.scss"
];
var template_dir = "templates/**/*.html";




gulp.task('default', ["sass"]);
//gulp.task('default', ["scripts", "sass"]);


//Watch each folder and update only relevant code
gulp.task('watch', function() {

	//gulp.watch(js_dir, ['scripts']);
	gulp.watch(css_dir, ['sass']);
	//gulp.watch(template_dir, ['html']);

});


gulp.task('scripts', function() {

    return gulp.src(js_dir)
		.pipe(sourcemaps.init())
        .pipe(concat('game.js'))
        .pipe(uglify())
		.pipe(sourcemaps.write('./'))


        .pipe(gulp.dest("./"))
	;

});


gulp.task('sass', function () {

	return gulp.src(css_dir)
		.pipe(sass({ style: "compressed" }).on('error', sass.logError))
		.pipe(minify())
		.pipe(gulp.dest('css'))
	;

});


// Combine template files
gulp.task('html', function() {

	return gulp.src([
			"templates/header.html",
			"templates/navbar.html",
			"templates/hbars.html",
			"templates/footer.html"
		])
		.pipe(concat('index.html'))
		.pipe(gulp.dest("./"))
	;

});
