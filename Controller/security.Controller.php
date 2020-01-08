<?php

class securityController{
    
    private $modelSecurity;
    
    public function __construct(){
        
        try{
            
            $this->modelSecurity = new security();
            
        } catch (Exception $ex) {
            
            die ($ex->getMessage());

        }
        
    }
    
    public function logOut() {
        
        $this->modelSecurity->destroyer();
        header("location:index.php");
      
    }
    
}
