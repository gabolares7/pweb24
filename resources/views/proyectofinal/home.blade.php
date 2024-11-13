<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Mercado Altavista Proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_home_proyecto.css') }}">
</head>
@include('Parciales.headproyecto')
<hr>
<body>
<section class="intro">
    <h2>Bienvenidos al Mercado de Altavista</h2>
    <p>Descubre un espacio lleno de frescura, tradición y sabor. En nuestro mercado
        encontrarás una amplia variedad de productos locales, puestos de comida y un
        ambiente acogedor para toda la familia.</p>
</section>

<section class="intro_2">
    <h2>Comprometidos con la Producción y el Consumo Responsables</h2>
    <p>Con la implementación del nuevo servicio de ventas ReFood, nos aseguramos
        de que todos aquellos productos no vendidos directamente al público y que se
        encuentren próximos a su fecha de expiración sean totalmente aprovechados,
        permitiendo hacer un análisis del excedente de producción y evitando así el
        desperdicio de alimentos</p>
</section>
<hr>
<section class="puestos">
    <h2>Puestos</h2>
    <p>Este ya tradicional mercado alberga una gran y cuidada selección
        de puestos de alimentación que lo convierten en lugar de referencia
        y punto de encuentro para los amantes de la calidad, la frescura y el buen servicio</p>
</section>
<section class="cards">
    <div class="card">
        <img src="https://s1.ppllstatics.com/canarias7/www/multimedia/202212/19/media/mary-artiles-carniceria.jpg" alt="Pescadería">
        <h3>Pescaderías</h3>
        <p>Lo mejor del mar, fresco y de calidad, traído cada día para ti.</p>
    </div>
    <div class="card">
        <img src="https://estaticos-cdn.prensaiberica.es/clip/8c1ddb9d-d412-4f81-afc0-8d371acacd94_alta-libre-aspect-ratio_default_0.jpg" alt="Carnicería">
        <h3>Carnicerías</h3>
        <p>Carne de primera, con cortes especiales para todas tus recetas.</p>
    </div>
    <div class="card">
        <img src="https://estaticos-cdn.prensaiberica.es/clip/18db49e1-792d-49c4-a13e-9679fa758dba_source-aspect-ratio_default_0.jpg" alt="Frutería">
        <h3>Fruterías</h3>
        <p>Frutas y verduras frescas directamente de los campos locales.</p>
    </div>
</section>
</section>
    @include('Parciales.footerproyecto')
</body>
</html>

