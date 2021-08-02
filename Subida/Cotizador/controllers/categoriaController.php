<?php

require 'models/categoriaModel.php';
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

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
            if(in_array($_FILES["file"]["type"], $allowedFileType)) {
                $targetPath = 'Doc/'.$_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
                $reader = new SpreadsheetReader($targetPath);
                $sheetCount = count($reader->Sheets());
                for($i=0; $i<$sheetCount; $i++) {
                    $reader->ChangeSheet($i);
                    foreach($reader as $row) {
                        //$this->categoriaModel->newCategoria($row);
                        //print_r($row);
                        $nombres = "";
                        if(isset($Row[0])) {
                            $nombres = mysqli_real_escape_string($Row[0]);
                        }
                        
                        $cargo = "";
                        if(isset($Row[1])) {
                            $cargo = mysqli_real_escape_string($Row[1]);
                        }
                
                        $celular = "";
                        if(isset($Row[2])) {
                            $celular = mysqli_real_escape_string($Row[2]);
                        }
                
                        $descripcion = "";
                        if(isset($Row[3])) {
                            $descripcion = mysqli_real_escape_string($Row[3]);
                        }
                    }
                }
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}