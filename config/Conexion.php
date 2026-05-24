<?php



class Conexion {
    private $host = "sql5.freesqldatabase.com";
    private $user = "sql5828139";
    private $pass = "YDitFZta52";
    private $db = "sql5828139";

    public function conectar(){

        try{

            $conexion = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db,
                $this->user,
                $this->pass
            );

            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conexion;

        }catch(PDOException $e){

            die("Error de conexión: " . $e->getMessage());

        }

    }

}

?>
