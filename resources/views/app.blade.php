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
            {{--Header--------------------------------------------------------}}
            <header class="flex justify-between py-6 px-8 mb-8" style="background: url('/images/splash.svg') -5px 20px no-repeat">
                <h1 >
                    <img src="images/logo.svg" alt="Laracasts">
                </h1>
                <a :href="laracast_url"  target="_blank">Laracast Series</a>
            </header>
            {{--End Header----------------------------------------------------}}

            <div class="container px-8 pb-10">
                <main class="flex">
                    {{--Aside-------------------------------------------------}}
                    <aside class="w-48 md:pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5 >
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link active-class="font-bold" to='/' exact>Logo</router-link></li>
                                <li class="text-sm leading-loose"><router-link :to="{name: 'logo-symbol'}">Logo Symbol</router-link></li> {{-- Via named route (defined in routes.js) --}}
                                <li class="text-sm leading-loose"><router-link to='/colors'>Colors</router-link></li>
                                <li class="text-sm leading-loose"><router-link to='/typography'>Typography</router-link></li>

                            </ul>
                        </section>

                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link to="/mascot">Mascot</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/loaders-and-animations">Loaders & Animations</router-link></li>
                                <li class="text-sm leading-loose"><router-link to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                            <ul class="list-reset">
                                <li class="text-sm leading-loose"><router-link to="/site-stats">Site Stats</router-link></li>
                            </ul>
                        </section>
                    </aside>
                    {{--End Aside---------------------------------------------}}

                    <div class="primary flex-1">
                        <router-view></router-view> {{-- Yield in laravel --}}
                    </div>
                </main>

            </div>

        </div>

        {{-- Scripts --}}
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
