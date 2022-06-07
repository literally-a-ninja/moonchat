<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Moonchat</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
<header></header>
<main>
    <example-component></example-component>
</main>

</body>
</html>
