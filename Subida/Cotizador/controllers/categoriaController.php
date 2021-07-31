<?php

require 'models/categoriaModel.php';

class categoriaController
{
    private $categoriaModel;

    public function __construct()
    {
        $this->categoriaModel = new Categoria;
    }

    public function Index()
    {
        require 'views/categoria/newCategoria.php';
    }

    public function save()
    {
        try {
            $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
            print_r($_FILES);
            die();
            if(in_array($_FILES["file"]["type"], $allowedFileType)) {
                $targetPath = 'Doc/'.$_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
                print("Hola");
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}