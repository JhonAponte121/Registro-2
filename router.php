<?php
include("Controllers/EstudiantesController.php");

$pagina_principal = new EstudiantesController;


if (isset($_GET["menu"])){
    if ($_GET["menu"] == "add") {
        $pagina_principal->add(); 

    }
    if ($_GET["menu"] == "edit") {
        $pagina_principal->edit(); 

    }
    if ($_GET["menu"] == "delete") {
        $pagina_principal->delete(); 

    }
    if ($_GET["menu"] == "view") {
        $pagina_principal->view(); 

    }
}else {
    $pagina_principal->list();
}
?>