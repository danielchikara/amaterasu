

<nav>
   
     
            <figure class="logo-navbar"></figure>
            <p class="text-navbar tittles-pages-logo">Amaterasu</p>
        </div>
                    <?php
                    
                    if(isset($_SESSION['NOMBRE'])){
                        
                        echo '<a href="?c=security&a=logOut" class="table-cell-td">Cerrar sesion</a>';
                        
                    }
                    
                    ?>
                </div>
                </nav>


