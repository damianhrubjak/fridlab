const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/react/ContactForm", "public/js/react-contact-form.js")
    .react()
    .js("resources/js/splide.js", "public/js")
    .js("resources/js/map.js", "public/js")
    .js("resources/js/lax.js", "public/js")
    .js("resources/js/fslightbox.js", "public/js")
    .postCss("resources/postcss/app.pcss", "public/css")
    // ADMIN
    .js("resources/js/admin/admin.js", "public/js/")
    .postCss("resources/postcss/admin/admin.pcss", "public/css/admin.css")
    .copy(
        "node_modules/@splidejs/splide/dist/css/splide-core.min.css",
        "public/css/vendor"
    )
    .disableSuccessNotifications()
    .webpackConfig({
        stats: {
            children: true,
        },
    });

if (mix.inProduction()) {
    mix.version();
}
