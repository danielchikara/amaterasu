

<?php

session_start();

class Factura {

    private $pdo;
    private $datos;

    public function __construct() {

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

    //metodo para redireccionar cuando no se aga GET.
    private function _redirect() {

        //     return header("Location:index.php");
    }

    public function getProductos() {

        $sql = "SELECT idproducto,nombre,imagen,precio,descripcion,precio FROM producto
  				
  				ORDER BY rand()";

        $stm = $this->pdo->prepare($sql);
        $stm->execute();

        while ($row = $stm->fetch()) {
            $this->datos[] = $row;
        }

        return $this->datos;
    }

    public function getProductosPorId($id = null) {

        $id = (int) $id;
        //validacion para que solo se pueda entrar a alchivo pro.php via get sino se
        //redireciona llamanedo el metodo _redirect();.

        if (empty($id) OR ! $id) {

            $this->_redirect();
        }

        $stm = $this->pdo->prepare("SELECT  idproducto, nombre,imagen,descripcion, stock, precio FROM producto  WHERE idproducto
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

    public function Obtener($idproducto) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM producto WHERE idproducto = ?");
            $stm->execute(array($idproducto));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function carro() {

        if (isset($_GET["idproducto"])) {
            $id = strip_tags($_GET["idproducto"]);
        } else {
            @$id = idproducto;
        }

        if (isset($_GET["action"])) {
            $action = strip_tags($_GET["action"]);
        } else {
            $action = "";
        }

        //*********************************
        if (isset($_GET["su"])) {

            $valor = strip_tags($_GET["su"]);
            $valor = (int) $valor;

            if ($valor == 0 OR $valor == '' OR ! $valor) {

                $action = 'removeProd';
            }
        } else {
            $valor = 0;
        }

        //**********************************
        switch ($action) {
            case 'sum':
                if (isset($_SESSION["carro"][$id])) {

                    $_SESSION["carro"][$id] = $valor;
                } else {
                    $_SESSION["carro"][$id] = 1;
                }

                break;

            case 'add':
                if (isset($_SESSION["carro"][$id]))
                    $_SESSION["carro"][$id];
                else
                    $_SESSION["carro"][$id] = 1;
                break;

            case 'aum':
                if (isset($_SESSION["carro"][$id]))
                    $_SESSION["carro"][$id] ++;
                else
                    $_SESSION["carro"][$id] = 1;
                break;

            case 'remove':

                if (isset($_SESSION["carro"][$id])) {

                    $_SESSION["carro"][$id] --;

                    if ($_SESSION["carro"][$id] == 0) {

                        unset($_SESSION["carro"][$id]);
                    }
                }

                break;

            case 'removeProd':
                if (isset($_SESSION["carro"][$id])) {

                    unset($_SESSION["carro"][$id]);
                }

                break;

            case 'empty':
                unset($_SESSION["carro"][$id]);

                break;
            
            
        }
    }

    public function insertFactura(array $factura) {
        $rta = 0;
        $sql = "INSERT INTO FACTURA (idcliente, fecha, total_venta) VALUES (?, ?, ?);";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt instanceof PDOStatement;
            $stmt->bindParam(1, $factura["ID_CLI"], PDO::PARAM_INT);
            $stmt->bindParam(2, $factura["FECHA"], PDO::PARAM_STR);
            $stmt->bindParam(3, $factura["TOTAL"], PDO::PARAM_INT);
            $stmt->execute();
            $rta = $stmt->rowCount();
            return (int) $this->pdo->lastInsertId();
             $this->modelSecurity->destroyer();
        } catch (PDOException $exc) {
            return 0;
        }
        
    }

    public function findProById($id) {
        $stm = $this->pdo->prepare("SELECT  idproducto, nombre, imagen, descripcion, stock, precio  FROM producto  WHERE idproducto='" . $id . "' ;");
        $stm instanceof PDOStatement;
        $stm->execute();
        $pro = $stm->fetch(PDO::FETCH_OBJ);
        //validacion de get para detos que sean superior a los id de db
        if (is_null($pro)) {
            return null;
        }else{
            return $pro;
        }
        //***********************************************

        return $this->datos;
    }

    public function agregarItem(array $item) {
        $idPro = $item["PROID"];
        $idFac = $item["IDFAC"];
        $cant = (int) $item["CAN"];
        $tot = (double) $item["TOT"];
        $rta = 0;
        $sql = "INSERT INTO ITEM VALUES (?, ?, ?, ?);";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt instanceof PDOStatement;
            $stmt->bindParam(1, $idPro, PDO::PARAM_INT);
            $stmt->bindParam(2, $idFac, PDO::PARAM_INT);
            $stmt->bindParam(3, $cant, PDO::PARAM_INT);
            $stmt->bindParam(4, $tot, PDO::PARAM_INT);
            $stmt->execute();
            $rta = $stmt->rowCount();
            return $rta;
        } catch (PDOException $exc) {
            return 0;
        }
    }

}



?>