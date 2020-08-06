const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix
    // js
    .scripts('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap.js')
    .scripts('resources/js/jquery-datatable.js', 'public/js/jquery-datatable.js')
    .scripts('resources/js/bootstrap-datatable.js', 'public/js/bootstrap-datatable.js')

    // css
    .scripts('resources/css/datatable.css', 'public/css/datatable.css')
    .scripts('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css/bootstrap.css')
    .scripts('resources/css/dev.css', 'public/css/dev.css')

    // images
    .copyDirectory('resources/img', 'storage/app/public')
    .version();