<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6">
                    <h1>Laracasts</h1>
                </header>

                <main class="flex">
                    <aside class="w-1/4">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">The Brand</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/">Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/about">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/about">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/about">Typography</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-4">Doodles</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/about">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/about">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/about">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
