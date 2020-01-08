 <link rel="stylesheet" type="text/css" href="css/estilos.css">
       <link rel="stylesheet" type="text/css" href="css/detalle.css">
       <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
       <script type="text/javascript" src="js/funciones.js"></script>

<nav id="navbar-auto-hidden">
    <div class="row hidden-xs"><!-- Menu computadoras y tablets -->
        <div class="col-xs-4">
            <figure class="logo-navbar"></figure>
            <p class="text-navbar tittles-pages-logo">Amaterasu</p>
        </div>
        <div class="col-xs-8">
            <div class="contenedor-tabla pull-right">
                <div class="contenedor-tr">


                    <div id="cart">
                       
                        
        
                <p class="text-navbar tittles-pages-logo">Carrito de Compra</p>
                <img src="assets/img/cart.png" >
                    </div>
                    
                      <?php
                    
                    if(isset($_SESSION['NOMBRE'])){
                        
                 echo '<a href="?c=security&a=logOut" class="table-cell-td"><i class="fa fa-power-off"></i><br>Cerrar Sesion</a>';
                      
                                      
                    }
                    
                    ?>
            
                </nav>
                <!-- Modal login -->
              



