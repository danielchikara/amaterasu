<?php

//Se incluye el modelo donde conectará el controlador.
require_once 'model/Categoria.php';

class CategoriaController {

    private $model;

    //Creación del modelo
    public function __CONSTRUCT() {
        $this->model = new Categoria();
    }

    //Llamado plantilla principal
    public function Index() {
        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/categoria/categoria.php';
    }

    //Llamado a la vista proveedor-editar
    public function Crud() {
        $pvd = new categoria();

        //Se obtienen los datos del proveedor a editar.
        if (isset($_REQUEST['idcategoria'])) {
            $pvd = $this->model->Obtener($_REQUEST['idcategoria']);
        }

        //Llamado de las vistas.
        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/categoria/categoria-editar.php';
    }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo() {

        $pvd = new categoria();

        //Llamado de las vistas.
        require_once 'view/all/header.php';
        require_once 'view/all/navbarAdministrador.php';
        require_once 'view/all/slidebar.php';
        require_once 'view/categoria/categoria-nuevo.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar() {
        $pvd = new categoria();

        //Captura de los datos del formulario (vista).
        $pvd->idcategoria = $_REQUEST['idcategoria'];
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->descripcion = $_REQUEST['descripcion'];


        //Registro al modelo proveedor.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php?c=Categoria&a=Index');
    }

    //Método que modifica el modelo de un proveedor.
    public function Editar() {
        $pvd = new categoria();

        $pvd->idcategoria = $_REQUEST['idcategoria'];
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->descripcion = $_REQUEST['descripcion'];


        $this->model->Actualizar($pvd);

        header('Location: index.php?c=Categoria&a=Index');
    }

    //Método que elimina la tupla proveedor con el nit dado.
    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['idcategoria']);
        header('Location: index.php?c=Categoria&a=Index');
    }

}
