<?php include 'includes/header.php'; ?>

    <div class="container my-5">
        <h2 class="text-center mb-4">Nuestros Productos</h2>
        <div class="row g-4">

            <?php
            $productos = [
                [
                    "nombre" => "Vela Lavanda",
                    "descripcion" => "Glicerina con fragancia de vainilla, caramelo con extracto de lavanda.",
                    "imagen" => "images/vela-lavanda.jpg"
                ],
                [
                    "nombre" => "Vela Caramelo",
                    "descripcion" => "Glicerina con fragancia de vainilla y caramelo con extracto de café.",
                    "imagen" => "images/vela-caramelo.jpg"
                ],
                [
                    "nombre" => "Vela Vainilla",
                    "descripcion" => "Glicerina con fragancia de vainilla, caramelo con granola.",
                    "imagen" => "images/vela-vainilla.jpg"
                ]
                ,
                [
                    "nombre" => "Jabón de Hojuelas de Mosh",
                    "descripcion" => "Suave mezcla de glicerina con hojuelas naturales de mosh. Ideal para pieles sensibles, limpia e hidrata con una delicada exfoliación.",
                    "imagen" => "images/jabon-hojuelas.jpg"
                ]
                ,
                [
                    "nombre" => "Jabón de Aloe Vera",
                    "descripcion" => "Glicerina enriquecida con extracto puro de aloe vera. Refresca, calma y regenera la piel de forma natural.

",
                    "imagen" => "images/alove-vera.jpg"
                ]
                ,
                [
                    "nombre" => "Jabón de Romero",
                    "descripcion" => "Jabón artesanal de glicerina con esencia natural de romero. Revitaliza, tonifica y estimula la circulación con cada uso.",
                    "imagen" => "images/jabon-romero.jpg"
                ]
                ,
                [
                    "nombre" => "Vela Mora",
                    "descripcion" => "Glicerina con fragancia dulce de mora silvestre. Aroma frutal e intenso que llena el ambiente de calidez.",
                    "imagen" => "images/vela-mora.jpg"
                ]
                ,
                [
                    "nombre" => "Vela Menta",
                    "descripcion" => "Glicerina con esencia fresca de menta natural. Refresca el aire y estimula los sentidos con su aroma revitalizante.",
                    "imagen" => "images/vela-menta.jpg"
                ]
                ,
                [
                    "nombre" => "Vela Canela",
                    "descripcion" => "Glicerina con fragancia cálida de canela especiada. Perfecta para crear un ambiente acogedor y relajante.

",
                    "imagen" => "images/vela-canela.jpg"
                ]
                ,
                [
                    "nombre" => "Jabón de Café",
                    "descripcion" => "Glicerina con extracto natural de café. Exfolia suavemente, estimula la piel y deja un aroma cálido y energizante.",
                    "imagen" => "images/jabon-cafe.jpg"
                ]
                ,
                [
                    "nombre" => "Jabón de Coco",
                    "descripcion" => "Glicerina enriquecida con aceite de coco. Nutre, suaviza y deja la piel delicadamente perfumada con un aroma tropical.",
                    "imagen" => "images/jabon-coco.jpg"
                ]
                ,
                [
                    "nombre" => "Jabón de Canela",
                    "descripcion" => "Glicerina con esencia de canela. Limpieza profunda con un toque especiado que tonifica y revitaliza la piel.

",
                    "imagen" => "images/jabon-canela.jpg"
                ]
            ];

            foreach ($productos as $prod): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="<?= $prod['imagen'] ?>" class="card-img-top" alt="<?= $prod['nombre'] ?>">
                        <div class="card-body text-center">
                            <h5><?= $prod['nombre'] ?></h5>
                            <p class="text-muted"><?= $prod['descripcion'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>