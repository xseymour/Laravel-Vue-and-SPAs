const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix.disableSuccessNotifications();
//mix.disableNotifications();

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    //The extract method seems to mess with the async load in routes: let LoadersAndAnimations = () => import("./components/LoadersAndAnimations");
    //For now, ill just extract to vendor since this isnt working properly with extraction
    .extract(['axios', 'jquery', 'lodash', 'popper.js', 'vue', 'bulma', 'vue-router', 'lottie-web'])
    //.extract(['axios', 'jquery', 'lodash', 'popper.js', 'vue', 'bulma', 'vue-router'])
    .tailwind()
   ;

 if (!mix.inProduction()) {
    mix.sourceMaps(); // Though it comes with a compile/performance cost, this will provide extra debugging information to your browser's developer tools when using compiled assets.
} else {
    mix.version();
}
