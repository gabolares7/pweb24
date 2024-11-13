@props([
    'title' => null
])
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ ($title ? "{$title} | " : null) . config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen" >
{{ $slot }}
Esta es la base tuneada
</body>
</html>
