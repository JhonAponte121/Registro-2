<div class="album py-5">
    <div class="row">
        <?php if (!empty($_SESSION["Estudiantes"])) : ?>
            <?php foreach ($_SESSION["Estudiantes"] as $matricula => $estudiante) : ?>
                <div class="col-md-4" <?php if (isset($_GET["filtro"]) && $_GET["filtro"] != $estudiante->Carrera) {
                                                    echo "hidden";
                                                } ?>>
                    <div class="card mb-4 shadow-sm <?php if ($estudiante->Status == false) {
                                                                echo "bg-dark";
                                                            }; ?>">
                        <?php
                                $dir = 'img/';
                                if (file_exists($dir.$matricula)) {
                                    echo '<img src="' . $dir.$matricula . '" width="100%" height="100%">';
                                }
                                ?>
                        <div class="card-body">
                            <p class="card-text">
                                <h6 <?php if ($estudiante->Status == false) {
                                                echo 'style="color:white"';
                                            }; ?>>Nombre</h6>
                                <P <?php if ($estudiante->Status == false) {
                                                echo 'style="color:white"';
                                            }; ?>>
                                    <?php echo $estudiante->Nombre ?>
                                    <?php echo $estudiante->Apellido ?>
                                </P>
                                <hr>
                                <h6 <?php if ($estudiante->Status == false) {
                                                echo 'style="color:white"';
                                            }; ?>>Carrera</h6>
                                <P <?php if ($estudiante->Status == false) {
                                                echo 'style="color:white"';
                                            }; ?>><?php echo $estudiante->Carrera ?></P>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="index.php?menu=view&matricula=<?php echo $matricula; ?>" class="btn btn-sm btn-primary">Ver+</a>|
                                    <a href="index.php?menu=edit&matricula=<?php echo $matricula; ?>" class="btn btn-sm btn-warning">Editar</a>|
                                    <a href="index.php?menu=delete&matricula=<?php echo $matricula; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                </div>
                                <small class="text-muted">Estado :
                                    <?php

                                            if ($estudiante->Status == true) {
                                                echo "Activo";
                                            } else {
                                                echo "Inactivo";
                                            }
                                            ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        <?php else : ?>
            <h1>No existen estudiantes registrados</h1>
        <?php endif ?>
    </div>
</div>