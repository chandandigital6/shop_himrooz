<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
                defer></script>
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
              crossorigin="anonymous">
        <title>{{ env('APP_NAME') }}</title>
        @vite("resources/js/app.js")
    </head>
    <body>
        <script> @stack('splade-templates') </script>

        <div id="app">
            <x-header/>
            <x-sidebar/>
            {{ $slot }}
            <x-footer/>
        </div>
    </body>
</html>
