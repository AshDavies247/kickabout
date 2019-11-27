<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kickabout</title>
        <link rel="stylesheet" href="{{'css/app.css'}}">
    </head>
    <body>
        <div id="app">
            <team-selection></team-selection>
        </div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
