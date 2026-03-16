// webpack.mix.js

const os = require('os');
const path = require('path');

// Caminho para os certificados do Local by WPEngine
const certPath = path.join(
  os.homedir(),
  os.platform() === 'win32'
    ? 'AppData/Roaming/Local/run/router/nginx/certs'
    : 'Library/Application Support/Local/run/router/nginx/certs'
);

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
  .disableNotifications()
  .browserSync({
    proxy: "https://boccogroup.digid/",
    host: "boccogroup.digid",
    open: "external",
    port: 3000,
    ws: true,
    https: {
      key: path.join(certPath, 'boccogroup.digid.key'),
      cert: path.join(certPath, 'boccogroup.digid.crt'),
    },
    files: ["./**/*.php", "./dist/js/*.js", "./dist/css/*.css"]
  });
  

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