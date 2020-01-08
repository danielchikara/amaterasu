<?php

 require_once("Model/Factura.php");
 $obj=new Factura();
 $productos=$obj->getProductos();

?>

<html>
   <head>
		<title>..::Mi carrito::..</title>
                
   </head>
         <body>
        
               </div>
            </div>
          </div>
              <section>
    <div class="container">
        <div class="row">
            
            
                
                   
         
                    <?php

                     foreach ($productos as $pro):
                    ?>
                   
                         <div class="col-md-3">
            <div class="panel panel-default">
                    
                    <div class="panel-heading">
            						   
                           <h1><p><?php echo $pro["nombre"]; ?></p></h1>
                           <p><img class="img-responsive" src=" <?php echo $pro['imagen']; ?>" width="400px"  height="400px"></p>
                            <p>$ <?php echo $pro["precio"]; ?></p>
                            <p><?php echo $pro["descripcion"]; ?></p>
                    
                         
                            
                          
                            <center><button> <a class="btn" href="?c=Factura&a=getProductosPorId&idproducto=<?php echo $pro['idproducto']; ?>">Detalle</a></button></center>
                          
                           
                          
                           
                           
                             </div>  
                    </div>
                 </div>
				          	 <?php
                          endforeach
                    ?>
              
                       
                    
                   
                    
              
           
        </div>
    </div>
</section>
    </body>
</html>

