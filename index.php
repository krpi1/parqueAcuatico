<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque Acuático - Paquetes y Carrusel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <?php
    function mostrarCarrusel() {
        $imagenes = [
            ["src" => "https://via.placeholder.com/1200x400/007BFF/FFFFFF?text=Parque+Acuático+1", "alt" => "Imagen del parque 1", "caption" => "Bienvenido al parque acuático - Imagen 1"],
            ["src" => "https://via.placeholder.com/1200x400/6C757D/FFFFFF?text=Parque+Acuático+2", "alt" => "Imagen del parque 2", "caption" => "Disfruta de nuestras albercas - Imagen 2"],
            ["src" => "https://via.placeholder.com/1200x400/28A745/FFFFFF?text=Parque+Acuático+3", "alt" => "Imagen del parque 3", "caption" => "Aventura y diversión para toda la familia - Imagen 3"]
        ];
        ?>
        <div id="carruselParque" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                foreach ($imagenes as $index => $imagen) {
                    $activeClass = ($index === 0) ? 'active' : '';
                    echo "<div class='carousel-item $activeClass'>";
                    echo "<img src='{$imagen['src']}' class='d-block w-100' alt='{$imagen['alt']}'>";
                    echo "<div class='carousel-caption d-none d-md-block'>";
                    echo "<p>{$imagen['caption']}</p>";
                    echo "</div></div>";
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carruselParque" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carruselParque" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php
    }

    mostrarCarrusel();
    ?>

    <div class="paquetes-albercas mt-5">
        <h2 class="text-center">Paquetes de Albercas</h2>
        <div class="row">
            <?php
            $paquetes = [
                [
                    "titulo" => "Paquete Familiar",
                    "descripcion" => "Acceso para 4 personas a todas las atracciones y 1 almuerzo incluido.",
                    "precio" => "$1500 MXN",
                    "imagen" => "https://via.placeholder.com/400x300/007BFF/FFFFFF?text=Paquete+Familiar"
                ],
                [
                    "titulo" => "Paquete Individual",
                    "descripcion" => "Acceso para 1 persona a todas las atracciones.",
                    "precio" => "$500 MXN",
                    "imagen" => "https://via.placeholder.com/400x300/28A745/FFFFFF?text=Paquete+Individual"
                ],
                [
                    "titulo" => "Paquete Premium",
                    "descripcion" => "Acceso ilimitado a todas las atracciones y comidas para 2 personas.",
                    "precio" => "$2500 MXN",
                    "imagen" => "https://via.placeholder.com/400x300/FFC107/FFFFFF?text=Paquete+Premium"
                ]
            ];

            foreach ($paquetes as $paquete) {
                echo "<div class='col-md-4'>";
                echo "<div class='card mb-4 shadow-sm'>";
                echo "<img src='{$paquete['imagen']}' class='card-img-top' alt='{$paquete['titulo']}'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>{$paquete['titulo']}</h5>";
                echo "<p class='card-text'>{$paquete['descripcion']}</p>";
                echo "<p class='card-text'><strong>{$paquete['precio']}</strong></p>";
                echo "</div></div></div>";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
