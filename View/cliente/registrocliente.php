<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>

    </head>
    <body id="container-page-registration">

        <section id="form-registration">
            <div class="container">
                <div class="row">
                    <div class="page-header">
                        <h1>Registro de usuarios <small class="tittles-pages-logo">Amaterasu</small></h1>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-center">
                        <br><br><br>
                        <p><i class="fa fa-users fa-5x"></i></p>
                        <p class="lead">
                            Al registrarse recibira notificaciones de nuestros productos y ofertas más recientes en nuestra tienda.
                        </p>
                        <br>
                        <img src="assets/img/xD.jpg" alt="electrodomesticos" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="container-form">
                            <p style="color:#fff;" class="text-center lead">Debera de llenar todos los campos para registrarse</p>
                            <br><br>

                            <form class="form-horizontal" role="form" action="?c=cliente&a=insertDataEmp" method="post">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control all-elements-tooltip" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" required name="clien-fullname" 
                                               data-toggle="tooltip" data-placement="top" title="Solamente letras" pattern="[a-zA-Z ]{1,50}" maxlength="50" autofocus="autofocus">
                                        <label for="nombre"</label>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control all-elements-tooltip" id="apellido" name="apellido" type="text" placeholder="Ingrese su apellido" required name="clien-fullname" 
                                               data-toggle="tooltip" data-placement="top" title="Solamente letras" pattern="[a-zA-Z ]{1,50}" maxlength="50" >
                                        <label for="apellido"</label>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                        <input class="form-control all-elements-tooltip" id="documentos" name="documentos" type="text" placeholder="Ingrese su documento"  
                                               data-toggle="tooltip" data-placement="top" title="Solamente Numeros"  maxlength="30" >
                                        <label for="documentos"</label>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input class="form-control all-elements-tooltip" id="contraseña" name="contraseña" type="password" placeholder="Ingrese una contraseña" required name="clien-pass" 
                                               data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                                        <label for="contraseña"</label>
                                    </div>
                                </div>
                                <br>    

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                        <input class="form-control all-elements-tooltip" id="direcciones" name="direcciones" type="text" placeholder="Ingrese su direccion" required name="clien-dir" 
                                               data-toggle="tooltip" data-placement="top" title="Ingrese la direción en la reside actualmente" maxlength="100">
                                        <label for="direcciones"</label>
                                    </div>
                                </div>
                                <br> 

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                        <input class="form-control all-elements-tooltip" id="telefono" name="telefono" type="text" placeholder="Ingrese su número telefónico" 
                                               required name="clien-phone" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11">
                                        <label for="telefono"</label>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                        <input class="form-control all-elements-tooltip" id="correos" name="correos" type="email" placeholder="Ingrese su Email" required name="clien-email" 
                                               data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email" maxlength="50">
                                        <label for="correos"</label>
                                    </div>
                                </div>
                                <br>

                                <hr>

                                <p><button type="submit" class="btn btn-success btn-block"><i class="fa fa-pencil"></i>&nbsp; Registrarse</button></p>
                                <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                            </form> 
                        </div> 
                    </div>
                </div>
            </div>
        </section>
    
    </body>
</html>