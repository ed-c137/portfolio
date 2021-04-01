const mix = require("laravel-mix");
require("laravel-mix-jigsaw");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

// mix
//   .jigsaw()
//   .js("source/_assets/js/main.js", "js")
//   .postCss("source/_assets/css/main.scss", "css", [
//     require("postcss-import"),
//     require("tailwindcss"),
//   ])
//   .options({
//     processCssUrls: false,
//   })
//   .version();

const tailwindcss = require("tailwindcss");
// mix.sass("resources/sass/app.scss", "public/css")
//     .options({
//         processCssUrls: false,
//         postCss: [tailwindcss("./tailwind.config.js")],
//     })
//     .js("resources/js/app.js", "public/js");

mix
  .jigsaw()
  .sass("source/_assets/css/main.scss", "css")
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("./tailwind.config.js")],
  })
  .js("source/_assets/js/main.js", "js")
  .version();
