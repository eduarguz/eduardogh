const tailwindcss = require('tailwindcss');
let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
  ]
});

mix.js('source/_assets/js/main.js', 'js')
  .less('source/_assets/less/main.less', 'css')
  .options({
    processCssUrls: false,
    postCss: [
      tailwindcss('tailwind.js'),
    ]
  }).version();