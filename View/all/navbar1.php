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
                    <!--<a href="?c=Cliente&a=logeo" class="table-cell-td">Login</a>-->
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
                    
                    <a href="javascript:void(0);" style="font-size:2px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>
                
                </nav>
                
    
    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
    <br>
    <h3 class="text-center tittles-pages-logo">Amaterasu</h3>
    <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
    </button>
    <br><br>
    <ul class="list-unstyled text-center">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="product.php">Productos</a></li>

    </ul>
</div>
