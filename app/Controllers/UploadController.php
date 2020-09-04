<?php

namespace app\Controllers;

use Exception;

class UploadController{

    private string $uploadPath = ROOT_PATH;
    private string $fileName;

    /**
     * opcional : Recebe o caminho do upload 
     *
     * @param string $path
     */
    public function __construct($path = "/public/assets/images"){
        $this->uploadPath .= $path;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function nameResolve() : string { 

        $name  = md5(basename($_FILES["image"]["name"]));
        $ext = pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);

        $this->fileName = $name.".".$ext;
        
        $path = $this->uploadPath."/".$this->fileName;

        return $path;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
   public function upload() : string {

        if(!isset($_FILES['image'])){

            return "default.jpg";

        }elseif(move_uploaded_file($_FILES['image']['tmp_name'],$this->nameResolve())){
            return $this->fileName;
        }else{
            throw new Exception("Diretorio não encontrado");
        }

   } 
}