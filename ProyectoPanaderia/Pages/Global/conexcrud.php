<?php 

  class conexion{

    private $servidor="localhost";
    private $usuario="root";
    private $password="";
    private $conexion;

    public function __construct(){

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=tienda", $this->usuario, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch( PDOException $e ){
            // return "Falla de conexión <br/>".$e;
        }
    }

    public function ejecutar($sql){ //Insertar/delete/Actualizar/ ----> Instancia o función para insertar, eliminar y actulizar
      $this->conexion->exec($sql);
      return $this->conexion->lastInsertId(); // Instrucción que ejecuta un sql para generar un ID
    }

    public function consultar($sql){
      $sentencia= $this->conexion->prepare($sql);
      $sentencia->execute();
      return $sentencia->fetchAll(); // fetchAll retorna todos los registros con la sentencia sql
    }
  }

?>