<?php
require_once("Models/Estudiante.php");
class EstudiantesController
{

    public function list()
    {
        session_start();
        require_once("Views/list.php");
    }
    public function view()
    {
        session_start();
        $estudiante = new Estudiante();
        $estudiante = $_SESSION["Estudiantes"][$_GET['matricula']];
        require_once("Views/view.php");
    }

    public function add()
    {
        session_start();
        $estudiante = new Estudiante();
        if ($_POST) {
            $id = date("Y") . "-" . date("i");
            if (isset($_SESSION["Estudiantes"])) {
                $id = date("Y") . "-" . date("i") . count($_SESSION["Estudiantes"]);
            }
            $estudiante->agregar($_POST["Nombre"], $_POST["Apellido"], $_POST["Carrera"], $_POST["Materias"], $_POST["Status"]);

            if ($_FILES['foto']["name"] != null) {
                $estudiante->agregarfoto($id);
            }

            $_SESSION["Estudiantes"][$id] = $estudiante;
            echo '
            <script>
                alert("Agregado satisfactorianente");
                window.location.assign("index.php"); 
            </script>';
        }
        require_once("Views/add.php");
    }
    public function edit()
    {
        session_start();
        $estudiante = new Estudiante();

        $estudiante = $_SESSION["Estudiantes"][$_GET['matricula']];
        if ($_POST) {

            $estado = isset($_POST["Status"]);
            if ($estado == false) {
                $estado = false;
            }

            if ($_FILES['foto']["name"] != null) {
                if (file_exists("img/" . $_GET['matricula'])) {
                    unlink("img/" . $_GET['matricula']);
                }
                $estudiante->agregarfoto($_GET['matricula']);
            }

            unset($_SESSION["Estudiantes"][$_GET['matricula']]);

            $estudiante->agregar($_POST["Nombre"], $_POST["Apellido"], $_POST["Carrera"], $_POST["Materias"], $estado);
            $_SESSION["Estudiantes"][$_GET['matricula']] = $estudiante;

            echo '
            <script>
                alert("Estudiante editado exitosamente"); 
                window.location.assign("index.php?menu=view&matricula=' . $_GET["matricula"] . '");
            </script>';
        }
        require_once("Views/edit.php");
    }
    public function delete()
    {
        session_start();
        if ($_POST) {
            unset($_SESSION["Estudiantes"][$_POST['id']]);
            echo '
            <script>
                alert("Estudiante eliminado exitosamente");
                window.location.assign("index.php"); 
            </script>';
        }
        require_once("Views/delete.php");
    }
}