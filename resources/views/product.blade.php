    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/resources/css/app.css">
    <?php
    if (!isset($_SESSION['message'])) : ?>
        <div class="alert alert- <?= $_SESSION['msg_type'] ?>">
        </div>
    <?php endif ?>


    <?php
    $mysqli = new mysqli("localhost", "root", "root", "pruebatecnica") or die(mysqli_error($mysqli));
    $result = $mysqli->query("Select * FROM data WHERE id='1' ") or die($mysqli->error);
    ?>
    <nav>
        <div class="nav-wrapper">
            <ul class="left hide-on-med-and-down">
                <li><a href="catalog.blade.php">Inicio</a></li>
        </div>
    </nav>
    <div class="container ">
        <div class="row">
            <div class="col s12 m7">
                <?php
                while ($row = $result->fetch_assoc()) : ?>
                    <div class="card">
                        <div class="card-image">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['urlimg']); ?>" />
                        </div>

                        <div class="contenido">
                            <h1><?php echo $row['Curso']; ?></h1>
                            <br>
                            <td><?php echo $row['descripcion']; ?></td>

                            <div class="info">
                                <div class="inicio">
                                    <h4>Inicio</h4>
                                    <td><?php echo $row['inicio']; ?></td>
                                </div>
                                <div class="fin">
                                    <h4>Fin</h4>
                                    <td><?php echo $row['fin']; ?></td>
                                </div>
                                <div class="duracion">
                                    <h4>Duracion</h4>
                                    <td><?php echo $row['hora']; ?></td>
                                </div>
                                <div class="horario">
                                    <h4>Carga Horaria</h4>
                                    <td><?php echo $row['duracion']; ?>hrs</td>
                                </div>
                                <div class="HI">
                                    <h4>Hora de inicio:</h4>
                                    <td><?php echo $row['hora']; ?>

                                </div>
                                <div class="max">
                                    <h4>Cupo:</h4>
                                    <td><?php echo $row['estudiantesmax']; ?></td>
                                </div>

                            </div>
                            <div class="cost">
                                <h4>Costo</h4>
                                <div class="action">
                                    <td class="cardaction"><?php echo $row['costo']; ?>$</td>
                                </div>
                            </div>



                            <br>
                            </tr>
                        </div>
                    </div>
            </div>
        <?php endwhile; ?>
        </div>