let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
  //  .sass('resources/assets/sass/theme/core/themes/default.scss', 'public/css/theme.css')
   .sass('resources/assets/sass/theme/demos/default/components.scss', 'public/css/components.css')
  //  .sass('resources/assets/sass/theme/demos/default/plugins.scss', 'public/css/plugins.css')
   .sass('resources/assets/sass/app.scss', 'public/css/app.css')
   .version();
