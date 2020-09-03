<?php 

namespace app\Controllers;

use app\Controllers\UploadController;
use Exception;

class ProdutoController{

    public function up(){

        try{
            
            $upload = new UploadController();

            $upload->upload();
    
        }catch(Exception $e){
            echo $e->getMessage();
        }
       
    }

}