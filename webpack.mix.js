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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'resources/css/front/css_parts/01-basic-reset.css',
    'resources/css/front/css_parts/02-header.css',
    'resources/css/front/css_parts/03-services.css',
    'resources/css/front/css_parts/04-featured-work.css',
    'resources/css/front/css_parts/05-portfolio.css',
    'resources/css/front/css_parts/06-customer.css',
    'resources/css/front/css_parts/07-c-logo-part.css',
    'resources/css/front/css_parts/08-team.css',
    'resources/css/front/css_parts/09-business-talking.css',
    'resources/css/front/css_parts/10-content-section.css',
    'resources/css/front/css_parts/11-footer.css',
    'resources/css/front/icon_css/all.css',
    'resources/css/front/media_query/01-basic-reset-MQ.css',
    'resources/css/front/media_query/02-header-MQ.css',
    'resources/css/front/media_query/03-services-MQ.css',
    'resources/css/front/media_query/04-featured-work-MQ.css',
    'resources/css/front/media_query/05-portfolio-MQ.css',
    'resources/css/front/media_query/06-customer-MQ.css',
    'resources/css/front/media_query/07-c-logo-part-MQ.css',
    'resources/css/front/media_query/08-team-MQ.css',
    'resources/css/front/media_query/09-business-talking-MQ.css',
    'resources/css/front/media_query/10-content-section-MQ.css',
    'resources/css/front/media_query/11-footer-MQ.css',
], 'public/css/front.css');

mix.scripts([
    'resources/js/front/icon_js/all.js',
], 'public/js/front.js');


mix.styles([
    'resources/css/admin/all.min.css',
    'resources/css/admin/sb-admin.css'
], 'public/css/libs.css');

mix.scripts([
    'resources/js/front/icon_js/all.js',
    'resources/js/admin/bootstrap.bundle.min.js',
    'resources/js/admin/jquery.easing.min.js',
    'resources/js/admin/jquery.min.js',
    'resources/js/admin/sb-admin.min.js',
], 'public/js/libs.js');




mix.styles([
    'resources/css/docs/bootstrap.min.css',
    'resources/css/docs/prism.css',
    'resources/css/docs/style.css',
    'resources/css/docs/styles.css',
    'resources/css/responsive-menu.css',
], 'public/css/docs.css');

mix.scripts([
    'resources/js/docs/bootstrap.min.js',
    'resources/js/docs/jquery.scrollTo.min.js',
    'resources/js/docs/jquery-3.3.1.min.js',
    'resources/js/docs/main.js',
    'resources/js/docs/prism.js',
    'resources/js/docs/stickyfill.min.js',
], 'public/js/docs.js');
