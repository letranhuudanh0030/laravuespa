<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel, Vue 2 and SPA</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="font-sans">
    <div id="app">
        <div class="container mx-auto">
            <header class="py-6 mb-8">
                <img src="/images/logo.svg" alt="Laravel, Vue 2 and SPA">
            </header>
            <main class="flex">
                <aside class="w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-3">The Brand</h5>
                        <ul class="">
                            <li class="text-sm leading-loose">
                                <router-link class="text-blacka" to="/">Logo</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/about">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/about">Colors</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/about">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-6">
                        <h5 class="uppercase font-bold mb-3">Doodles</h5>
                        <ul class="">
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/">Mascot</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/about">Illustration</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/">Loaders and Animations</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black" to="/about">Wallpaper</router-link>
                            </li>
                        </ul>
                    </section>
                </aside>
                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>
            <hr>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
