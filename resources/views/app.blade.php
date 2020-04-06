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
            <header class="py-6 px-8 mb-8">
                <h1>Laracasts</h1>
            </header>
            <div class="container px-8">

                <main class="flex">
                    <aside class="w-1/5 pt-8">
                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">The Brand</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/typography">Typography</router-link></li>
                            </ul>
                        </div>

                        <div class="mb-10">
                            <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="uppercase font-bold mb-5 text-base">Stats</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black leading-loose" to="/site-stats">Site Stats</router-link></li>
                            </ul>
                        </div>
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
