<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Top Page</title>
</head>
<body>
    @include('header')
<main>@yield('main')</main>
</body>
</html>