var fs = require("fs");

module.exports = function(gulp, callback) {
   return fs.writeFile(
      "src/sass/pages/variables.scss",

      '@import "../components/color-variables"; \n@import "../themes/' +
         myThemeName +
         '/variables"; \n@import "../components/variables"; \n@import "../theme-components/theme-variables"; \n@import "../themes/' +
         myThemeName +
         '/theme-variables";',

      callback
   );
};
