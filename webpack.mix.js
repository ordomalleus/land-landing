const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');


// Для минификации картинок
mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([{
            from: 'resources/images',
            to: 'images', // Laravel mix will place this in 'public/img'
        }]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80,
                })
            ]
        })
    ]
});

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    // Отключаем автоподмену url в scss файлах
    .options({
        processCssUrls: false
    })
    // Копируем без вебпака wowjs
    .copy(['node_modules/wowjs/dist/wow.js'], 'public/js');

// mix.react('resources/js/admin/app.jsx', 'public/js/admin.js')
//     .sass('resources/sass/admin/index.scss', 'public/css/admin.css');
