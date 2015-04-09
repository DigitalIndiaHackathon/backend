
/*********************************************
* Debug
* --------------------------------------------
* Set to true if under development environment
**********************************************/
var debug = true;

var gulp = require('gulp');
var gutil = require('gulp-util');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var include = require('gulp-include');
var size = require('gulp-filesize');
var clean = require('gulp-clean');

/**
 * Clean CSS
 * - Cleans all the CSS Files in the stylesheets directory
 */
 gulp.task('cleanCSS', function(){
 	return gulp.src('assets/stylesheets/*.css', {read: false})
 	.pipe(clean());
 });

/**
 * Clean JS
 * - Cleans the complete javascripts directory
 */
 gulp.task('cleanJS', function(){
 	return gulp.src('assets/javascripts/*.js', {read: false})
 	.pipe(clean());
 });

/**
 * Build CSS
 * Steps
 * - Takes the all SCSS files from stylesheets library folder
 * - Compiles the sass to css
 * - Autoprefixes the properties with various vendor prefixes
 * - Checks the size
 * - Minifies the CSS
 * - Stores to the assets/stylesheets directory
 * - Outputs any errors
 */
 gulp.task('buildCSS', function() {
 	return gulp.src('lib/stylesheets/*.scss')
 	.pipe(sass())
 	.pipe(autoprefixer('last 2 version', "ie 9"))
 	.pipe(minifycss({
 		keepBreaks : true
 	}))
 	.pipe(gulp.dest('assets/stylesheets/'))
 	.on('error', gutil.log);
 });

/**
 * Build JS
 * Steps
 * - Takes all the JS file from the ROOT of the javascripts library folder
 * - File insertion compilation
 * - Minifies the JS
 * - Checks the size
 * - Saves to the assets/javascripts directory
 * - Outputs any errors
 */
 gulp.task('buildJS', function() {
 	return gulp.src('lib/javascripts/*.js')
 	.pipe(include())
 	.pipe(uglify())
 	.pipe(gulp.dest('assets/javascripts/'))
 	.pipe(size())
 	.on('error', gutil.log);
 });

/**
 * Watch all the stylesheet files for BuildCSS
 * Watch all the javascript files for BuildJS
 */
 gulp.task('watch', function() {
 	gulp.watch('lib/stylesheets/**/**/*.scss', ['buildCSS']);
 	gulp.watch('lib/javascripts/**/*.js', ['buildJS']);
 });

//Default Task
gulp.task('default', ['cleanCSS','cleanJS','buildCSS','buildJS','watch']);
