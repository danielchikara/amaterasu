<?php
require_once("Model/Factura.php");

$obj = new Factura();
$id = strip_tags($_GET["idproducto"]);
$productos = $obj->getProductosPorId($id);
?>

<html>
    <head>
        <title>..::Mi carrito::..</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="css/detalle.css">
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/funciones.js"></script>
    </head>
    <body>

    </div>
</div>
<div id="principal">
    <!--********************menu****************************************-->
    <!--********************contenedor******************************** -->
    <div id="content">
        <div id="contenedor">
            <br>
<?php foreach ($productos as $pro): ?>
                <div id="foto_detalle">
                    <p><img class="img-responsive" src=" <?php echo $pro['imagen']; ?>" width="600px"  height="100px" ></p> 
                </div>
            
                <div id="detalles">
                    <p>CODIGO DE PRODUCTO: <?php echo $pro["idproducto"]; ?></p>
                    <p>NOMBRE DE PRODUCTO: <?php echo $pro["nombre"]; ?></p>
                    <p>CANTIDAD DISPONIBLE: <?php echo $pro["stock"]; ?></p>
                    <p>CATEGORIA DEL PRODUCTO: <?php echo $pro["descripcion"]; ?></p>
                    <p>PRECIO DEL PRODUCTO: <?php echo $pro["precio"]; ?></p>
                  
                </div>


                <div id="contenedor">

                    <a class="btn success" href="index.php?c=Factura&a=carro&idproducto=<?php echo $pro['idproducto']; ?>&action=add">Agregar</a>


                    <a class="btn success" href="index.php?c=Factura&a=Index">Volver</a>

                </div>
            <div>
                <br>
                <br>
                <br>
                <br>
                <br>
                
            </div>

<?php endforeach; ?>
        </div>
    </div>
    <!--********************contenedor****************************************-->

</div>
  <div>
                <br>
                <br>
                <br>
                <br>
                <br>
                
            </div>

</body>
</html>