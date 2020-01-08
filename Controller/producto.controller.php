<?php

require_once 'model/producto.php';

class ProductoController {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new producto();
    }

    //Llamado plantilla principal
    public function Index() {
        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/producto/producto.php';
    }

    public function Crud() {
        $prod = new producto();

        if (isset($_REQUEST['idproducto'])) {
            $prod = $this->model->Obtener($_REQUEST['idproducto']);
        }

        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdmin.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/all/footer.php';
    }

    public function Nuevo() {
        $prod = new producto();

        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/producto/producto-nuevo.php';
    }

    public function Guardar() {
        $prod = new producto();

        $prod->idcategoria = $_REQUEST['idcategoria'];
        $prod->codigo = $_REQUEST['codigo'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->stock = $_REQUEST['stock'];
        $prod->descripcion = $_REQUEST['descripcion'];
        $prod->imagen = $_REQUEST['imagen'];
        $prod->estado = $_REQUEST['estado'];
        $prod->precio = $_REQUEST['precio'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto&a=Index');
    }

    public function Editar() {
        $prod = new producto();

        $prod->idproducto = $_REQUEST['idproducto'];
        $prod->idcategoria = $_REQUEST['idcategoria'];
        $prod->codigo = $_REQUEST['codigo'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->stock = $_REQUEST['stock'];
        $prod->descripcion = $_REQUEST['descripcion'];
        $prod->imagen = $_REQUEST['imagen'];
        $prod->estado = $_REQUEST['estado'];
        $prod->precio = $_REQUEST['precio'];


        $this->model->Actualizar($prod);

        header('Location:index.php?c=producto&a=Index ');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['idproducto']);
        header('Location: index.php?c=producto&a=Index');
    }

    public function Reportes() {
        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/reportes/reportes.php';
    }

}
