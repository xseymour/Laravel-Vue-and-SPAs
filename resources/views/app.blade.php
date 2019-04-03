<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel, Vue and SPA's</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="font-sans">
        <div id="app">

            <div class="container mx-auto">
                <header class="flex justify-between py-6 mb-8">
                    <h1>
                        <img src="images/laracasts.svg" alt="Laracasts">
                    </h1>
                    <a :href="laracast_url"  target="_blank" class="text-black">Laracast Series</a>
                </header>
                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The Brand</h5 >
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" to='/'>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to='/'>Logo Symbol</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to='/'>Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link class="text-black" to='/'>Typography</router-link></li>

                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'about' }">Mascot</router-link></li> {{-- Via named route (defined in routes.js) --}}
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'about' }">Illustrations</router-link></li> {{-- Via named route (defined in routes.js) --}}
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'about' }">Loaders & Animations</router-link></li> {{-- Via named route (defined in routes.js) --}}
                                <li class="text-sm leading-loose"><router-link class="text-black" :to="{ name: 'about' }">Wallpapers</router-link></li> {{-- Via named route (defined in routes.js) --}}
                            </ul>
                        </section>
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view> {{-- Yield in laravel --}}
                    </div>
                </main>

                <hr>
            </div>

        </div>

        {{-- Scripts --}}
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
