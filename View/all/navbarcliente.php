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
                       
                        
                         <?php
             if (isset($_SESSION["cantidadTotal"]))
                 {
             ?>
                <p>&nbsp; Total Productos: <?php echo $_SESSION["cantidadTotal"]; ?></p>
                
                
                <p>&nbsp;Total Compra $     <?php echo $_SESSION["totalcoste"]; ?></p>
             <?php
                }else{
             ?>
                <p>&nbsp; total: 0</p>
                <p>&nbsp; $     0</p>
          <?php } ?>
                
                <a href="index.php?c=Factura&a=carro"><img src="assets/img/cart.png" ></a>
                    </div>
                    
                      <?php
                    
                    if(isset($_SESSION['NOMBRE'])){
                        
                        echo '<a href="?c=security&a=logOut" class="table-cell-td"><i class="fa fa-power-off"></i><br>Cerrar Sesion';
                                      
                    }
                    
                    ?>
            
                </nav>
                <!-- Modal login -->
                <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" id="modal-form-login">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión en Cat Electronics</h4>
                            </div>
                            <form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                                    <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>
                                </div>
                                <div class="form-group">
                                    <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                                    <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                                </div>

                                <p>¿Cómo iniciaras sesión?</p>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value="option1" checked>
                                        Usuario
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value="option2">
                                        Administrador
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                                </div>
                                <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal login -->
                <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
                    <br>
                    <h3 class="text-center tittles-pages-logo">Amaterasu</h3>
                    <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    <br><br>
                    <ul class="list-unstyled text-center">
                        <li><a href="index.php">In</a></li>
                        <li><a href="product.php">Productos</a></li>
<?php
if (!$_SESSION['nombreAdmin'] == "") {
    echo '<li><a href="configAdmin.php">Administración</a></li>';
} elseif (!$_SESSION['nombreUser'] == "") {
    echo '<li><a href="pedido.php">Pedido</a></li>';
} else {
    echo '<li><a href=?c=index&m=registroEmpleado.php">Registro</a></li>';
}
?>
                    </ul>
                </div>
                <!-- Modal carrito -->
                <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <br>
                            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
                            <p class="text-center">El producto se añadio al carrito</p>
                            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal carrito -->

                <!-- Modal logout -->
                <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <br>
                            <p class="text-center">¿Quieres cerrar la sesión?</p>
                            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
                            <p class="text-center">
                                <a href="process/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                            </p>
                        </div>
                    </div>
                </div>



