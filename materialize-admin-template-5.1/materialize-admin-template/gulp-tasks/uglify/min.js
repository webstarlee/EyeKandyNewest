var uglify = require('gulp-uglify');
var rename = require("gulp-rename");
var gutil = require('gulp-util');

module.exports = function(gulp, callback) {
	return gulp.src( ['**/*.js', '!**/*.min.js', '!**/sweet-alerts.js'], {cwd: config.destination.js} )
    .pipe(uglify())
    .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(config.destination.js));
};