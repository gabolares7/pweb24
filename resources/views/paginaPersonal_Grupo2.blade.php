<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Personal de {{ $nombre }}</title>

</head>
<body>
<section>
@include('Parciales.parcialHeader')
</section>
<br>
<br>
<br>
<main>
    <section>
        <h1>Bienvenido, {{ $nombre }}</h1>
        <p>A continuación, puedes ver el contenido de tu página privada:</p>

        <div class="contenido-html">
            {!! $htmlContent !!}
        </div>
    </section>
</main>
<br>
<br>
<br>
<section>
@include('Parciales.parcialFooter')
</section>
</body>
</html>
