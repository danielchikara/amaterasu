<?php


class Cliente {
    
    
     private $pdo;
    public function __construct() {
        try {
           $this->pdo= database::Conectar();    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function queryId($documento){
        
        try{
            
            $stm = $this->pdo->prepare("SELECT * FROM cliente WHERE documento='$documento'");
            $stm->execute();
            //PDO = persistence data object - patron de diseño
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $e) {
            
            die($e->getMessage());

        }
        
    }
    
    public function insertEmp($nombre,$apellido,$documentos,$contraseña,$direcciones,$telefono,$correos){
        try {
            $stm= $this->pdo->prepare("INSERT INTO cliente (nombre_cliente,apellido_cliente,documento,contraseña,direccion,telefono,correo,usuarioNivel) "
                                                 . "VALUES ('$nombre','$apellido','$documentos','$contraseña','$direcciones','$telefono','$correos','Cliente')");
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
   
}