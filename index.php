
<!doctype html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Estudiante Registrado</title>
</head>

<body style="background-color:transparent">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" i>
        <a class="navbar-brand" href="index.php">Registro 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=add">Agregar estudiante</a>
                </li>
                <?php if (!isset($_GET["menu"])) : ?>
                           
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?filtro=Redes">Redes</a>
                            <a class="dropdown-item" href="index.php?filtro=Software">Software</a>
                            <a class="dropdown-item" href="index.php?filtro=Multimedia">Multimedia</a>
                            <a class="dropdown-item" href="index.php?filtro=Seguridad">Seguridad </a>
                        </div>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <?php require_once("router.php") ?>
    </div>
</body>
<br>

</html>