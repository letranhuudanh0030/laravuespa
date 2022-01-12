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
        <header class="py-6 px-8 mb-8" style="background: url({{ asset('images/splash.svg')}}) 0 15px no-repeat;">
            <h1 style="padding: 12px 0">
                <a href="/">
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="Laravel, Vue 2 and SPA">
                </a>
            </h1>
        </header>
        <div class="px-8 pb-10">
            <div class="container">
                <main class="lg:flex">
                    <aside class="lg:w-64 lg:pt-8 flex-shrink-0 mb-10 lg:mb-0">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            <ul class="">
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/" exact>Logo</router-link>
                                </li>
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/logo-symbol">Logo Symbol
                                    </router-link>
                                </li>
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/colors">Colors
                                    </router-link>
                                </li>
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/typography">Typography
                                    </router-link>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul class="">
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/mascot">Mascot
                                    </router-link>
                                </li>
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/illustration">Illustration
                                    </router-link>
                                </li>
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/loaders-and-animations">
                                        Loaders
                                        and Animations
                                    </router-link>
                                </li>
                                <li class="text-sm leading-hd-loose">
                                    <router-link class="text-hd-black" to="/wallpaper">Wallpaper
                                    </router-link>
                                </li>
                            </ul>
                        </section>
                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
