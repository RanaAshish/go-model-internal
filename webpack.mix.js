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

// commentout below code to enable juery autoloading
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

// ==copy static to public
mix.copy("resources/assets/static", "public/static/");

// ===public path
mix.setPublicPath('public');

// ====compile our main.js file

mix.js('resources/assets/model.js', 'public/js/model');

// set path for production link
mix.setResourceRoot('/');
