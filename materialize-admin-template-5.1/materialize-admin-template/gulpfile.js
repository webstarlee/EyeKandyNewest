// Require the modules.
var gulp             = require('gulp');
var gutil            = require('gulp-util');
var gulpSequence     = require('gulp-sequence');
var gulpRequireTasks = require('gulp-require-tasks');
var minimist         = require('minimist');
var config            = require('./config.json');

var options          = minimist(process.argv.slice(2));

// Global Variables
global.myLayout        = options.Layout;
global.myLayoutName    = options.LayoutName;
global.myThemeName     = options.ThemeName;
global.config           = config;

global.dashboardRename = '';
global.rtl             = '';
global.dist            = "false";

if( options.dist !== undefined ){
	dist = options.dist;
}
if (options.TextDirection !== undefined){
	global.myTextDirection = options.TextDirection.toLowerCase();
	if (myTextDirection == 'rtl')
		rtl = '-rtl';
}
else{
	global.myTextDirection = '';
}

gutil.log(gutil.colors.green('Starting Gulp!!'));

// Exclude template specific files
if (myLayout == 'vertical-modern-menu-template') {
	dashboardRename = config.vertical_modern_menu_template.dashboardRename;
	pugSrc         = config.vertical_modern_menu_template.pugSrc;
} else if (myLayout == 'vertical-menu-nav-dark-template') {
	dashboardRename = config.vertical_menu_nav_dark_template.dashboardRename;
	pugSrc         = config.vertical_menu_nav_dark_template.pugSrc;
} else if (myLayout == 'vertical-gradient-menu-template') {
	dashboardRename = config.vertical_gradient_menu_template.dashboardRename;
	pugSrc         = config.vertical_gradient_menu_template.pugSrc;
} else if (myLayout == 'vertical-dark-menu-template') {
	dashboardRename = config.vertical_dark_menu_template.dashboardRename;
	pugSrc         = config.vertical_dark_menu_template.pugSrc;
} else if (myLayout == 'horizontal-menu-template') {
	dashboardRename = config.horizontal_menu_template.dashboardRename;
	pugSrc         = config.horizontal_menu_template.pugSrc;
} 

// Invoke the module with options.
gulpRequireTasks({

	// Specify path to your tasks directory.
	path: process.cwd() + '/gulp-tasks' // This is default!
	
	// Additionally pass any options to it from the table below.
	// ...
	// path	- './gulp-tasks'	Path to directory from which to load your tasks modules
	// separator -	:	Task name separator, your tasks would be named, e.g. foo:bar:baz for ./tasks/foo/bar/baz.js
	// arguments -	[]	Additional arguments to pass to your task function
	// passGulp	- true	Whether to pass Gulp instance as a first argument to your task function
	// passCallback -	true	Whether to pass task callback function as a last argument to your task function
	// gulp	- require('gulp')	You could pass your existing Gulp instance if you have one, or it will be required automatically
	
});

// Clean Task.
gulp.task('dist-clean', ['clean:css', 'clean:js']);

// Monitor changes for both pug and sass files.
gulp.task('monitor', gulpSequence(['sass:watch']));

// JS Distribution Task.
gulp.task('dist-js', gulpSequence('clean:js', 'copy:js', 'uglify:min', 'notify:js'));

// SASS Compile Task.
gulp.task('sass-compile', function(callback) {
	gulpSequence('file-write:sass-file', 'file-write:sass-page-variable-file', ['sass:main', 'sass:theme', 'sass:layouts', 'sass:pages', 'sass:custom'], 'autoprefixer:css', 'csscomb:css', 'cssmin:css')(callback)
 });

// CSS Distribution Task.
gulp.task('dist-css', gulpSequence('sass-compile', 'notify:css'));

// Full Distribution Task.
gulp.task('dist', ['dist-css', 'dist-js']);

// Default Task.
gulp.task('default', ['dist']);

gulp.task('replacement', gulpSequence('replacement:css', 'replacement:js'));