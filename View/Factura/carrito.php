<br><br><br><br><br>
<?php

 require_once("model/Factura.php");
 $obj=new Factura();
   @$id=strip_tags($_GET["idproducto"]);
   $productos=$obj->getProductosPorId($id);
 

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
          <div id="content">
              <div id="contenedor">
                    <br>
                      <div id="contenedor_car">
                         <div id="prin_tabla" class="producto">
                             <div id="tabla">

                                 <?php $obj->carro(); ?>
                                  <?php
                                   if (isset($_SESSION["carro"])) {

                                        $totalcoste=0;
                                        $Total=0;
                                  ?>


                                  <table border="0">
                                      <tr>
                                          <th>Producto</th>
                                          <th>Cantidad</th>
                                          <th>Peticion Normal</th>
                                          <th>Total</th>
                                      </tr>

                                    <?php
                                         foreach ($_SESSION["carro"] as $key=>$valor) {
                                             $fi=$obj->getProductosPorId($key);
                                              foreach($fi as $fila){
                                                   @$id=$fila["idproducto"];
                                                   @$producto=$fila["nombre"];
                                                   @$precio=$fila["precio"];
                                              }

                                              @$coste=$precio*$valor;
                                              @$totalcoste=$totalcoste+$coste;
                                              @$Total=$Total+$valor;
                                    ?>

                                      <tr>
                                          <td><?php echo @$producto; ?></td>
                                          <td><?php echo $valor; ?></td>
                                          <td>
                                              <a href="index.php?c=Factura&a=carro&idproducto=<?php echo $id ?>&action=aum"><img src="assets/img/aumentar.png" alt="aumentar" title="aumentar"></a>
                                              <a href="index.php?c=Factura&a=carro&idproducto=<?php echo $id ?>&action=remove"><img src="assets/img/restar.png" alt="restar" title="restar"></a>
                                              <a href="index.php?c=Factura&a=carro&idproducto=<?php echo $id ?>&action=removeProd"><img src="assets/img/eliminar.png" alt="eliminar" title="eliminar"></a>
                                          </td>
                                          
                                          
                                          <td style="width: 10px"><?php echo $coste ?></td>
                                       </tr>

                                     <?php } ?>

                                        <tr>
                                          <td colspan="3">Total</td>
                                          <td><?php echo $totalcoste ?></td>
                                        </tr>
                                    </table>
                              </div>

                         <?php
                            }
                             @$_SESSION['totalcoste']=$totalcoste;
                             @$_SESSION['cantidadTotal']=$Total;
                         ?>

                      </div>

                              <button onclick="window.location='?c=Factura&a=guardarFactura';" class="btn success">Finalizar compra</button>
                  </div>
                              <button onclick="window.location='index.php?c=Factura&a=Index'">Seguir comprando</button>
              </div>
       </div>


        <!--********************contenedor****************************************-->

     
  </div>
    
        </body>
</html>