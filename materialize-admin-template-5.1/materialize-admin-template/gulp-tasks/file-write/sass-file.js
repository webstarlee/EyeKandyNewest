var fs = require('fs');

module.exports = function(gulp, callback) {
	return fs.writeFile('src/sass/theme.scss', '@import "themes/' + myThemeName + '/theme";', callback);
};