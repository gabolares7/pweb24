<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conozca a Nuestro Grupo</title>
    <link rel="stylesheet" href="{{ asset('css/grupo2/estiloElEquipo.css') }}">
</head>
<body>
@include('Parciales.parcialHeader')
<br>
<br>
<div class="container">
    <h1 style="color: black">Conozca a Nuestro Grupo </h1>
    <div class="member-container">
        <div class="member">
            <img src="/storage/images/fran.jpeg" alt="Foto de Francisco">
            <h2>Francisco Cazorla Hernández</h2>
            <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
            <p>Futbolista profesional en sus tiempos libres</p>
            <a class="button" href="mailto:francisco.cazorla104@alu.ulpgc.es">Escribir un correo</a>
        </div>
        <div class="member">
            <img src="/storage/images/carlitos.jpg" alt="Foto de Carlos">
            <h2>Carlos Solinis Divin</h2>
            <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
            <p>Amante de la naturaleza y de la comida china</p>
            <a class="button" href="mailto:carlos.solinis101@alu.ulpgc.es">Escribir un correo</a>
        </div>
        <div class="member">
            <img src="/storage/images/gabri.avif" alt="Foto de Gabriel">
            <h2>Gabriel Lares Aspera</h2>
            <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
            <p>Futuro inversionista e investigador</p>
            <a class="button" href="mailto:gabriel.lares101@alu.ulpgc.es">Escribir un correo</a>
        </div>
    </div>
</div>
<br>
<br>
@include('Parciales.parcialFooter')
</body>
</html>


