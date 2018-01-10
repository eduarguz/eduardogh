<!DOCTYPE html>
<html lang="es" class="bg-white antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduardo Guzmán H.</title>

        <link rel="manifest" href="{{ $page->asset_prefix }}/manifest.json">
        <link rel="stylesheet" href="{{ $page->asset_prefix }}{{ mix('/css/app.css') }}">
    </head>
    <body class="font-sans font-normal leading-normal">
        @yield('body')
    </body>
</html>
