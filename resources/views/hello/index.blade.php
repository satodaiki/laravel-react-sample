<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
</head>
<body style="padding:10px">
    <h1>Hello/Index</h1>
    <p>{{ $msg }}</p>

    <div id="example"></div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>