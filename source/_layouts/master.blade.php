<!DOCTYPE html>
<html lang="es" class="bg-white antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Eduardo Guzmán - Resume</title>

        <link rel="manifest" href="{{ $page->asset_prefix }}/manifest.json">
        <link rel="stylesheet" href="{{ $page->asset_prefix }}{{ mix('/css/app.css') }}">

        <meta name="description" content="Know a little more about me, this is my resume.">
        <meta name="author" content="Eduardo Guzmán">
        <meta name="keywords" content="web,design,html,css,html5,development">

        <meta property="og:title" content="Eduardo Guzmán - Resume">
        <meta property="og:image" content="https://avatars1.githubusercontent.com/u/14934055?s=400&u=028aa17315634ba36c6163c701e1b6beaa18fc07&v=4">
        <meta property="og:description" content="Know a little more about me, this is my resume. Eduardo Guzmán.">

        <meta property="twitter:card" content="Know a little more about me, this is my resume. Eduardo Guzmán.">
        <meta property="twitter:description" content="Know a little more about me, this is my resume. Eduardo Guzmán.">
    </head>
    <body class="font-sans font-normal leading-normal">
        @yield('body')
    </body>
</html>
