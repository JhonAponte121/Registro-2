<?php
class Estudiante
{
    public $Nombre;
    public $Apellido;
    public $Carrera;
    public $Materias;
    public $Status;

    function agregar($Nombre, $Apellido, $Carrera, $Materias, $Status)
    {
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Carrera = $Carrera;
        $this->Materias = $Materias;
        $this->Status = $Status;
    }
    function agregarfoto($id)
    {
        if (
            $_FILES["foto"]["type"] == "image/jpeg" ||
            $_FILES["foto"]["type"] == "image/JPEG" ||
            $_FILES["foto"]["type"] == "image/jpg" ||
            $_FILES["foto"]["type"] == "image/JPG" ||
            $_FILES["foto"]["type"] == "image/png" ||
            $_FILES["foto"]["type"] == "image/PNG"
        ) {
            $dir = './img';
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
            $tmp_name = $_FILES["foto"]["tmp_name"];
            move_uploaded_file($tmp_name, "$dir/$id");
        } else {
            echo '
                <script>
                    alert("Foto no subida,debe tener el formato PNG o JPG");
                </script>';
        }
    }
}