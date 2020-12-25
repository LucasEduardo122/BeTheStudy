const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles('resources/css/animate.min.css', 'public/assets/css/animate.min.css')
.styles('resources/css/bootstrap.min.css', 'public/assets/css/bootstrap.min.css')
.styles('resources/css/jquery-ui.css', 'public/assets/css/jquery-ui.css')
.styles('resources/css/jquery.mCustomScrollbar.min.css','public/assets/css/jquery.mCustomScrollbar.min.css')
.styles('resources/css/meanmenu.css', 'public/assets/css/meanmenu.css')
.styles('resources/css/nice-select.css', 'public/assets/css/nice-select.css')
.styles('resources/css/normalize.css', 'public/assets/css/normalize.css')
.styles('resources/css/owl.carousel.min.css','public/assets/css/owl.carousel.min.css')
.styles('resources/css/responsive.css','public/assets/css/responsive.css')
.styles('resources/css/slick.css','public/assets/css/slick.css')
.styles('resources/css/style.css','public/assets/css/style.css')

.scripts('resources/js/bootstrap.bundle.min.js','public/assets/js/bootstrap.bundle.min.js')
.scripts('resources/js/custom.js','public/assets/js/custom.js') 
.scripts('resources/js/jquery-3.0.0.min.js','public/assets/js/jquery-3.0.0.min.js')
.scripts('resources/js/jquery.mCustomScrollbar.concat.min.js','public/assets/js/jquery.mCustomscrollbar.concat.min.js')
.scripts('resources/js/jquery.min.js','public/assets/js/jquery.min.js')
.scripts('resources/js/jquery.validate.js','public/assets/js/jquery.validate.js')
.scripts('resources/js/plugin.js','public/assets/js/plugin.js')
.scripts('resources/js/popper.min.js','public/assets/js/popper.min.js')
