"use strict";

var gulp         = require('gulp');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var bourbon      = require("node-bourbon").includePaths;


// folders
var input  = './scss/**/*.scss';
var output = './css';

gulp.task('sass', function() {
	return gulp
		.src(input)
    // .pipe(sourcemaps.init())
		.pipe(sass({
			outputStyle: 'compressed',
			includePaths: [
				require("node-bourbon").includePaths,
				'./node_modules/susy/sass',
				'./bower_components/breakpoint-sass/stylesheets'
			]
		}).on('error', sass.logError))
    // .pipe(sourcemaps.write('.'))
		.pipe(autoprefixer())
		.pipe(gulp.dest(output));
});

gulp.task('watch', function() {
  return gulp
    .watch(input, ['sass'])
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

gulp.task('default', ['sass', 'watch']);
