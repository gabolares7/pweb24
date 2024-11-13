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
<section class="main-content">
    <div class="container">
        <h1 class="title">Conozca a Nuestro Grupo</h1>
        <div class="team-members">
            <article class="member-profile">
                <figure>
                    <img src="/storage/images/fran.jpeg" alt="Foto de Francisco" class="member-photo">
                    <figcaption>
                        <h2>Francisco Cazorla Hernández</h2>
                    </figcaption>
                </figure>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Futbolista profesional en sus tiempos libres</p>
                <a class="contact-button" href="mailto:francisco.cazorla104@alu.ulpgc.es">Escribir un correo</a>
            </article>
            <article class="member-profile">
                <figure>
                    <img src="/storage/images/carlitos.jpg" alt="Foto de Carlos" class="member-photo">
                    <figcaption>
                        <h2>Carlos Solinis Divin</h2>
                    </figcaption>
                </figure>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Amante de la naturaleza y de la comida china</p>
                <a class="contact-button" href="mailto:carlos.solinis101@alu.ulpgc.es">Escribir un correo</a>
            </article>
            <article class="member-profile">
                <figure>
                    <img src="/storage/images/gabri.avif" alt="Foto de Gabriel" class="member-photo">
                    <figcaption>
                        <h2>Gabriel Lares Aspera</h2>
                    </figcaption>
                </figure>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Futuro inversionista e investigador</p>
                <a class="contact-button" href="mailto:gabriel.lares101@alu.ulpgc.es">Escribir un correo</a>
            </article>
        </div>
    </div>
</section>
@include('Parciales.parcialFooter')
</body>
</html>


