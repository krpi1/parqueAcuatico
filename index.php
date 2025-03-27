<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque Acuático</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #heroCarousel .carousel-item img {
            height: 70vh; 
            object-fit: cover; 
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5); 
            border-radius: 5px; 
        }

        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 1.5rem;
        }

        .carousel-caption a.btn-primary {
            font-size: 1.2rem;
        }

        .section-paquetes {
            padding: 50px 0;
            background-color: #f9f9f9;
        }

        .paquete {
            background: #fff;
            padding: 20px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .paquete h3 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .paquete p {
            font-size: 1.2rem;
        }

        .paquete .btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div id="heroCarousel" class="carousel slide" data-ride="carousel" data-interval="3000"> 
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/uno.jpg" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Relájate en el Parque Acuático</h1>
                    <p>La mejor experiencia acuática para toda la familia</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/dos.jpg" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Disfruta de nuestras Albercas</h1>
                    <p>Relájate y diviértete</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/tres.jpg" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Aventura para Toda la Familia</h1>
                    <p>Una experiencia inolvidable en cada rincón</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cuatro.jpg" class="d-block w-100" alt="Imagen 4">
                <div class="carousel-caption d-none d-md-block">
                    <h1>El Mejor Parque Acuático</h1>
                    <p>Disfruta de nuestras actividades acuáticas</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cinco.jpg" class="d-block w-100" alt="Imagen 5">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Relájate en el Agua</h1>
                    <p>Pasarás momentos únicos con tus seres queridos</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/seis.jpg" class="d-block w-100" alt="Imagen 6">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Vive la Diversión en Familia</h1>
                    <p>Un lugar perfecto para compartir y divertirse</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/siete.jpg" class="d-block w-100" alt="Imagen 7">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Una Aventura Inigualable</h1>
                    <p>Un paraíso acuático para todos</p>
                    <a href="#paquetes" class="btn btn-primary">Reservar ahora</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="section-paquetes" id="paquetes">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Paquetes</h2>
            <div class="row">
        
                <div class="col-md-4">
                    <div class="paquete">
                        <h3>Paquete Familiar</h3>
                        <p>Disfruta de un día completo en el parque acuático para toda la familia.</p>
                        <p><strong>Precio:</strong> $99.99</p>
                        <a href="#" class="btn btn-primary">Reservar ahora</a>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="paquete">
                        <h3>Paquete de Aventura</h3>
                        <p>Una experiencia llena de emoción con todas nuestras actividades acuáticas.</p>
                        <p><strong>Precio:</strong> $129.99</p>
                        <a href="#" class="btn btn-primary">Reservar ahora</a>
                    </div>
                </div>
               
                <div class="col-md-4">
                    <div class="paquete">
                        <h3>Paquete Relajante</h3>
                        <p>Ideal para disfrutar de un día de descanso y relajación en nuestras albercas.</p>
                        <p><strong>Precio:</strong> $89.99</p>
                        <a href="#" class="btn btn-primary">Reservar ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
