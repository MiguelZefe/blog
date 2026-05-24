<?php

require_once "config/Conexion.php";
class Publicacion {

    private $conexion;

    public function __construct(){

        $db = new Conexion();
        $this->conexion = $db->conectar();

    }

    // LISTAR
    public function obtener(){

        $sql = "SELECT * FROM publicaciones ORDER BY fecha DESC";

        $stmt = $this->conexion->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    // GUARDAR
    public function guardar($titulo, $contenido, $autor){

        $sql = "INSERT INTO publicaciones
                (titulo, contenido, autor)
                VALUES
                (:titulo, :contenido, :autor)";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":contenido", $contenido);
        $stmt->bindParam(":autor", $autor);

        return $stmt->execute();

    }

    // OBTENER POR ID
    public function obtenerPorId($id){

        $sql = "SELECT * FROM publicaciones WHERE id = :id";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    // ACTUALIZAR
    public function actualizar($id, $titulo, $contenido, $autor){

        $sql = "UPDATE publicaciones
                SET
                titulo = :titulo,
                contenido = :contenido,
                autor = :autor
                WHERE id = :id";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":contenido", $contenido);
        $stmt->bindParam(":autor", $autor);

        return $stmt->execute();

    }

    // ELIMINAR
    public function eliminar($id){

        $sql = "DELETE FROM publicaciones WHERE id = :id";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindParam(":id", $id);

        return $stmt->execute();

    }

}

?>
