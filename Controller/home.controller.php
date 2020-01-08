<?php
//Se incluye el modelo donde conectará el controlador.


class homeController{

  

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/all/header.php';
        require_once 'view/all/navbarResponsivo.php';
        require_once 'view/home/home.php';
        require_once 'view/all/footer.php';
    }
    
     public function Verproducto(){
        require_once 'view/all/header.php';
        require_once 'view/all/navbarResponsivo.php';
        require_once 'view/home/ver_productos.php';
        require_once 'view/all/footer.php';
    }
    
    public function Peluche(){
     require_once 'view/all/header.php';
     require_once 'view/all/navbarResponsivo.php';
     require_once 'view/home/Peluches.php';
     require_once 'view/all/footer.php';
     
 }
  public function Articulos(){
     require_once 'view/all/header.php';
     require_once 'view/all/navbarResponsivo.php';
     require_once 'view/home/articulos.php';
     require_once 'view/all/footer.php';
     
 }
 public function Ropa(){
     require_once 'view/all/header.php';
     require_once 'view/all/navbarResponsivo.php';
     require_once 'view/home/Ropa.php';
     require_once 'view/all/footer.php';
     
 }
  public function Dulces(){
     require_once 'view/all/header.php';
     require_once 'view/all/navbarResponsivo.php';
     require_once 'view/home/dulces.php';
     require_once 'view/all/footer.php';
     
 }
  public function Figuras(){
        require_once 'view/all/header.php';
        require_once 'view/all/navbarResponsivo.php';
        require_once 'view/home/Figuras.php';
        require_once 'view/all/footer.php';
        
    }



    //Llamado a la vista proveedor-editar
   
}
