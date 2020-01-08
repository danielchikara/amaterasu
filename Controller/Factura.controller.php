<?php

//Se incluye el modelo donde conectará el controlador.
require_once 'Model/Factura.php';

class FacturaController {

    private $model;

    //Creación del modelo
    public function __construct() {
        $this->model = new Factura();
        $this->datos = array();
        $host = "localhost";
        $db = "ukiyoshop";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$host;dbname=$db";

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exeption $e) {
            $this->pdo = null;
            error_log("Error en la conexión a la bd" . $e->getMessage());
        }
    }

    private function _redirect() {

        //    return header("Location:index.php");
    }

    public function getProductosPorId($id = null) {


        require_once 'view/all/header.php';
        require_once 'view/all/navbarcliente.php';
        require_once 'view/Factura/pro.php';
        require_once 'view/all/footer.php';

//        $id = (int) $id;
//        //validacion para que solo se pueda entrar a alchivo pro.php via get sino se
//        //redireciona llamanedo el metodo _redirect();.
//
//        if (empty($id) OR ! $id) {
//
//            $this->_redirect();
//        }

        $stm = $this->pdo->prepare("SELECT  idproducto, nombre,imagen,descripcion, stock, precio  FROM producto  WHERE idproducto
                                             AND idproducto='" . $id . "'");
        $stm->execute();

        while ($row = $stm->fetch()) {
            $this->datos[] = $row;
        }

        //validacion de get para detos que sean superior a los id de db
        if (empty($this->datos)) {
            $this->_redirect();
        }
        //***********************************************

        return $this->datos;
    }

    public function guardarFactura() {
        if (isset($_SESSION["carro"])) {
            $carrito = $_SESSION["carro"];
            $factura = array();
            $factura["ID_CLI"] = $_SESSION["USER_ID"];
            $factura["TOTAL"] = $_SESSION['totalcoste'];
            $factura["FECHA"] = $fecha = date("Y-m-d h:i:s");
            $proItem = null;
            $newItem = array();
            $totalItem = 0;
            $idFactura = $this->model->insertFactura($factura);
            if (is_int($idFactura) && $idFactura != 0) {
                foreach ($carrito as $idPro => $cant) {
                    $newItem = array();
                    $proItem = $this->model->findProById($idPro);
                    $totalItem = ($proItem->precio * $cant);
                    $newItem["IDFAC"] = $idFactura;
                    $newItem["PROID"] = $idPro;
                    $newItem["CAN"] = $cant;
                    $newItem["TOT"] = $totalItem;
                    $r = $this->model->agregarItem($newItem);
                    unset($_SESSION["carro"]);
                    
                    
                    header("location: ?c=Cliente&a=Gracias");
                     
                }
            } else {
                header("location: ?c=compra&a=Index");
                
                
            }
        } else {
            header("location: ?c=compra&a=Index");
        }
        
    
    }

    //Llamado plantilla principal
    public function Index() {
        require_once 'view/all/header.php';
        require_once 'view/all/navbarcliente.php';
        require_once 'view/Factura/compra.php';
        require_once 'view/all/footer.php';
    }

    public function carro() {

        require_once 'view/all/header.php';
        require_once 'view/all/navbarCarrito.php';
        require_once 'view/Factura/carrito.php';
        require_once 'view/all/footer.php';
    }

    public function Comprar() {

        require_once 'view/all/header.php';
        require_once 'view/all/navbarCarrito.php';
        require_once 'view/compra/comprar.php';
        require_once 'view/all/footer.php';
    }

}
