<?php

require_once "models/Publicacion.php";

class PublicacionController {

    // MOSTRAR
    public function index(){

        $modelo = new Publicacion();

        $publicaciones = $modelo->obtener();

        require_once "views/index.php";

    }

    // CREAR
    public function crear(){

        require_once "views/crear.php";

    }

    // GUARDAR
    public function guardar(){

        if($_POST){

            $titulo = $_POST["titulo"];
            $contenido = $_POST["contenido"];
            $autor = $_POST["autor"];

            $modelo = new Publicacion();

            $modelo->guardar($titulo, $contenido, $autor);

            header("Location:index.php");

        }

    }

    // EDITAR
    public function editar(){

        $id = $_GET["id"];

        $modelo = new Publicacion();

        $publicacion = $modelo->obtenerPorId($id);

        require_once "views/editar.php";

    }

    // ACTUALIZAR
    public function actualizar(){

        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $contenido = $_POST["contenido"];
        $autor = $_POST["autor"];

        $modelo = new Publicacion();

        $modelo->actualizar(
            $id,
            $titulo,
            $contenido,
            $autor
        );

        header("Location:index.php");

    }

    // ELIMINAR
    public function eliminar(){

        $id = $_GET["id"];

        $modelo = new Publicacion();

        $modelo->eliminar($id);

        header("Location:index.php");

    }

}

?>