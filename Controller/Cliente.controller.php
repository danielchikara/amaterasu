<?php

session_start();
require_once 'model/Cliente.php';
require_once 'model/security.php';

class ClienteController {

    private $model;
    private $modelsecurity;

    public function __construct() {
        try {
//genero la instancia de la clase index y la guardo en modelIndex
            $this->model = new Cliente();
            $this->modelsecurity = new security();

            //$this->modelSecurity = new security();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function RegistrarCliente() {
        require_once 'view/all/header.php';
        require_once 'view/all/navbarResponsivo.php';
        require_once 'view/cliente/registrocliente.php';
        require_once 'view/all/footer.php';
    }

    public function insertDataEmp() {
        $this->model->insertEmp($_POST['nombre'], $_POST['apellido'], $_POST['documentos'], $_POST['contraseña'], $_POST['direcciones'], $_POST['telefono'], $_POST['correos']);
        header("location:index.php?c=Cliente&a=RegistrarCliente");
    }

    public function comprimir() {

        echo $this->model->encriptar($_REQUEST['dato1']);
    }

    public function descomprimir() {
        
    }

    public function validarData() {

        foreach ($this->model->queryId($_REQUEST['user']) as $r) {
            
        }
        if (($r->documento == $_REQUEST['user']) && ($r->contraseña == $_REQUEST['password']) && ($r->usuarioNivel == 'Administrador')) {

            //echo "<center><h1>La Sesion Es Correcta administrador</h1></center>";

            $data = array("documento" => $r->documento,
                "nombre" => $r->nombre_cliente,
                "apellido" => $r->apellido_cliente,
                "user_id" => $r->idcliente,
                "password" => $r->contraseña);

            //$this->modelsecurity->logIn($data);
            header("location:?c=categoria&a=Nuevo");
        } else if (($r->documento == $_REQUEST['user']) && ($r->contraseña == $_REQUEST['password']) && ($r->usuarioNivel == 'Cliente')) {

            echo "<center><h1>La Sesion Es Correcta cliente</h1></center>";

            $data = array("documento" => $r->documento,
                "nombre" => $r->nombre_cliente,
                "apellido" => $r->apellido_cliente,
                "user_id" => $r->idcliente,
                "password" => $r->contraseña);

            $this->modelsecurity->logIn($data);
            header("location:index.php?c=Factura&a=Index");
        } else {
            header("location:?c=cliente&a=logeo");
        }
    }

    public function admin() {

        //$this->modelsecurity->validarSesion();
        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/cliente/administrador.php';
       
    }

    public function logeo() {

        require_once 'view/all/header.php';
        require_once 'view/all/navbarResponsivo.php';
        require_once 'view/cliente/logeo.php';
        require_once 'view/all/footer.php';
    }

    public function employee() {

        require_once 'view/all/header.php';
        require_once 'view/all/navbar1.php';
        require_once 'view/cliente/cliente.php';
        require_once 'view/all/footer.php';
    }
    
     public function Gracias() {

        require_once 'view/all/header.php';
        require_once 'view/all/navbargracias.php';
        require_once 'view/Factura/gracias.php';
        require_once 'view/all/footer.php';
    }

}
