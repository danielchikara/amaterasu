<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<div class="topnav" id="myTopnav">

<nav id="navbar-auto-hidden">
    <div class="row hidden-xs"><!-- Menu computadoras y tablets -->
        <div class="col-xs-4">
            <figure class="logo-navbar"></figure>
            <p class="text-navbar tittles-pages-logo">Amaterasu</p>
        </div>
        <div class="col-xs-8">
            <div class="contenedor-tabla pull-right">
                <div class="contenedor-tr">
                    <a href="index.php" class="table-cell-td">Inicio</a>
                    
                
                        
                    <a href="?c=Cliente&a=RegistrarCliente" class="table-cell-td">Registro</a>
                    
                   
                    <a href="?c=Cliente&a=logeo" class="table-cell-td">
                        <i class="fa fa-user"></i>&nbsp;&nbsp;Login
                    </a>
                    
                                   
                    <div class="dropdown"><div class="xp">
                         <div class="table-cell-td" data-toggle="dropdown">Productos
    <span class="caret"></span></div>
    <ul class="dropdown-menu">
      <li><a href="?c=home&a=Figuras">Figuras</a></li>
      <li><a href="?c=home&a=Peluche">Peluches </a></li>
      <li><a href="?c=home&a=Ropa">Ropa</a></li>
      <li><a href="?c=home&a=Articulos">Articulos</a></li>
      <li><a href="?c=home&a=Dulces">Dulces</a></li>
    </ul>
                         
  </div>
</div>

                </div>
            </div>
        </div>
    </div>
    <div class="row visible-xs"><!-- Mobile menu navbar -->
        <div class="col-xs-12">
            <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                <i class="fa fa-th-list"></i>&nbsp;&nbsp;Menú
            </button>
            <a href="?c=Cliente&a=RegistrarCliente" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Registrarse">
                <i class="fa fa-group"></i>&nbsp;
            </a>
 
            <a href="?c=Cliente&a=logeo"  id="button-login-xs" class="elements-nav-xs">
                <i class="fa fa-user"></i>&nbsp; Iniciar Sesión
            </a> 

        </div>
    </div>
</nav>
<!-- Modal login -->

<!-- Fin Modal login -->
<div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
    <br>
    <h3 class="text-center tittles-pages-logo">Amaterasu</h3>
    <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
    </button>
    <br><br>
    <ul class="list-unstyled text-center">
        <li><a href="index.php">Inicio</a></li>
        <li><div class="dropdown"><div class="xp">
                         <div class="table-cell-td" data-toggle="dropdown">Productos
    <span class="caret"></span></div>
    <ul class="dropdown-menu">
      <li><a href="?c=home&a=Figuras">Figuras</a></li>
      <li><a href="?c=home&a=Peluche">Peluches </a></li>
      <li><a href="?c=home&a=Ropa">Ropa</a></li>
      <li><a href="?c=home&a=Articulos">Articulos</a></li>
      <li><a href="?c=home&a=Dulces">Dulces</a></li>
    </ul>
                         
  </div>
            </div></li>

    </ul>
</div>



