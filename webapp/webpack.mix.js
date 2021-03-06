const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/scss/app.scss', 'public/css')

mix.purgeCss({
    extensions: ['html', 'php']
})