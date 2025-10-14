// webpack.mix.js

let mix = require('laravel-mix');

mix
  .setPublicPath('dist')
  .setResourceRoot('./')
  .autoload({
    jquery: ['$', 'window.jQuery']
  })
  .js('src/js/main.js', 'dist')
  .js('src/js/google-maps.js', 'dist')
  .sass('src/sass/main.sass', 'dist')
  .sass('src/sass/admin-login.sass', 'dist')

  .browserSync({
    proxy: {
      target: "https://boccogroup.digid/",
      ws: true,
    },
    https: true,
    files: ["./**/*.php", "./dist/js/*.js", "./dist/css/*.css"]
  })
  .disableNotifications();

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}