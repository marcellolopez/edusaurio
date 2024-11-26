<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iframe Responsivo</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para el iframe responsivo */
        html, body {
            height: 100%; /* Asegura que el html y el body ocupen todo el alto de la pantalla */
            margin: 0; /* Elimina los márgenes predeterminados */
            
        }

        .iframe-container {
            background-color: black;
            position: relative;
            width: 100%;
            height: 100vh; /* Hace que el contenedor ocupe el 100% del alto de la ventana */
            overflow: hidden; /* Evita scroll adicional en la página */
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0; /* Elimina el borde del iframe */
        }
    </style>
</head>
<body style="">
    <div class="container-fluid p-0">
        <section>
            <div class="iframe-container">
                <iframe src=https://v4.tustreaming.cl:2000/VideoPlayer/edusauriotv?autoplay=1" scrolling="auto" title="https://tustreaming.cl/" allowfullscreen></iframe>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
