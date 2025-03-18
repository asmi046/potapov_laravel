<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{ asset('/icons/favicons/icon256.png') }}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{ asset('/icons/favicons/icon128.png') }}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{ asset('/icons/favicons/icon64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ asset('/icons/favicons/icon32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/icons/favicons/icon16.png') }}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{ asset('/icons/favicons/fav.svg') }}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])

    <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(53850847, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/53850847" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <main id="main">
        @yield('main')
    </main>
</body>

</html>
