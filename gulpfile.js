var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')


    .styles([

        'bootstrap.css',
        'bootstrap.min.css',
        'font-awesome.css',
        'font-awesome.min.css'

    ],'./public/css/main.css')

        .scripts([

            'jquery.min.js',
            'bootstrap.js'

        ],'./public/js/main.js')



});
