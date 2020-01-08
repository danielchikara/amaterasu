<?php

class security {
    
    private $pdo;
    
    public function __construct() {
        
        try{
            
            $this->pdo = database::Conectar();
            
        } catch (Exception $ex) {
            
            die ($ex->getMessage());

        }
        
    }
    
    
    public function logIn($user){
        
        $_SESSION['NOMBRE']=$user['nombre'];
        $_SESSION['APELLIDO']=$user['apellido'];
        $_SESSION['USER_DOC']=$user['documento'];
        $_SESSION['USER_ID']=$user['user_id'];
        $_SESSION['PASSWORD']=$user['password'];
    }
    
    
    public function destroyer() {
        
        unset($_SESSION['NOMBRE']);
        unset($_SESSION['APELLIDO']);
        unset($_SESSION['USER_ID']);
        unset($_SESSION['PASSWORD']);
        session_destroy();
        
    }
    
    public function validarSesion() {
        
        if(!isset($_SESSION['NOMBRE'])){
            
            header("location:?c=home&m=index");
            
        }
        
    }


}
