const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/scripts.js', 'public/js')
    .js('resources/assets/demo/chart-area-demo.js', 'public/assets/demo')
    .js('resources/assets/demo/chart-bar-demo.js', 'public/assets/demo')
    .js('resources/assets/demo/datatables-demo.js', 'public/assets/demo')
    .js('resources/assets/demo/date-range-picker-demo.js', 'public/assets/demo')
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/styles.css', 'public/css')
    .css('resources/css/custom.css', 'public/css')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });

if (mix.inProduction()) {
    mix.version();
}
