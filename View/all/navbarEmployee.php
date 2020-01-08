<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cine ChupameEstePenco - Vendedor</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="?c=index&m=employee">Home</a>
               </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Opciones
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?c=index&m=registroPelemp">Comprar Entradas</a></li>
        </ul>
        </li>
      </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['NOMBRE'] . ' ' . $_SESSION['APELLIDO']; ?> - Vendedor</a></li>
                <li><a href="?c=security&m=logOut"><span class="glyphicon glyphicon-log-in"></span> Salgate Papu</a></li>
            </ul>
        </div>
    </div>
</nav> 
