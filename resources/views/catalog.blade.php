<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/resources/css/app.css">

    <title>Prueba Tecnica</title>
</head>



<?php
$mysqli = new mysqli("localhost", "root", "root", "pruebatecnica") or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
?>

<body>
    <div class="catalogo">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center">CATALOGO</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="producto.php">Productos</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <div class="container">
                <?php
                while ($row = $result->fetch_assoc()) : ?>
                    <div class="row">
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image ">
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['urlimg']); ?>" />
                                    <h1 class="card-content"><?php echo $row['Curso']; ?></h1>
                                </div>

                                <div class="card-content">
                                    <p><?php echo $row['descripcion']; ?></p>
                                    <div class="cost">
                                        <h4>Costo</h4>
                                        <div class="action">
                                            <td class="cardaction"><?php echo $row['costo']; ?>$</td>
                                        </div>
                                    </div>



                                </div>
                                <div class="card-action">
                                    <a href="product.blade.php">
                                        <h4>mas</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
        </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>