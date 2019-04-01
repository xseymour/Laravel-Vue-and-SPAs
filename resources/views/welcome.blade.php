<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel, Vue and SPA's</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style type="text/css">body {padding-top: 40px !important}</style>
    </head>
    <body>
        <div id="app" class="container">
            <a :href="laracast_url"  target="_blank">Episode 1</a>
            <br><br>
            
            <router-link to='/'>Home</router-link>
            <router-link :to="{ name: 'about' }">About</router-link> {{-- Via named route (defined in routes.js) --}}
            <hr>
            <router-view></router-view> {{-- Yield in laravel --}}
        </div>

        {{-- Scripts --}}
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
