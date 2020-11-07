<div class="position-relative overflow-hidden bg-light" style="padding:10px">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">
                <?php echo $estudiante->Nombre . " " . $estudiante->Apellido ?>
            </h2>
            <p class="lead font-weight-normal"><?php echo $_GET['matricula'] ?></p>
            <a class="btn btn-outline-warning" href="index.php?menu=edit&matricula=<?php echo $_GET['matricula'] ?>">Editar</a>|
            <a href="index.php?menu=delete&matricula=<?php echo $_GET['matricula']; ?>" class="btn btn-outline-danger">Eliminar</a>|
            <a class="btn btn-outline-success" href="index.php">Regresar a inicio</a>
            <div class="my-3 py-3 bg-dark text-white">
                <h4 class="display-5">Materias Favoritas</h4>
                <hr class="bg-white">
                <ul class="list-group">
                    <?php
                    $array = explode(",", $estudiante->Materias);

                    foreach ($array as $key => $materia) {
                        echo '<li>' . $materia . '</li>';
                    }

                    ?>
                </ul>
            </div>
            <div class="my-3 py-3 bg-dark text-white">
                <h2 class="display-5">Carrera</h2>
                <p class="lead"><?php echo $estudiante->Carrera ?></p>
            </div>
            <div class="my-3 py-3 bg-dark text-white">
                <h2 class="display-5">Estado</h2>
                <p class="lead"> <?php

                                    if ($estudiante->Status == true) {
                                        echo "Activo";
                                    } else {
                                        echo "Inactivo";
                                    }
                                    ?></p>
            </div>
        </div>
        <div class="col-md-5">
            <?php
            $dir = 'img/';
            if (file_exists($dir . $_GET['matricula'])) {
                echo '<img src="' . $dir . $_GET['matricula'] . '" width="100%" height="100%">';
            }
            ?>
        </div>
    </div>
</div>