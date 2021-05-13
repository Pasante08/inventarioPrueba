<?php

    require 'models/fileModel.php';
    require 'models/areaModel.php';

    class FileController
    {
        private $fileModel;

        public function __construct()
        {
            $this->fileModel = new File;
        }

        public function Index()
        {
            $files = $this->fileModel->getAll();
            require 'views/listArchive.php';
        }

        public function new()
        {
            $areas = new Area;
            $areas = $areas->getAll();
            require 'views/newDoc.php';
        }

        public function save()
        {
            if (isset($_POST['area_id'])) {
                $file = $_FILES["file"];
                move_uploaded_file($file["tmp_name"], "Doc/".$file["name"]);
                $_POST['name'] = $file['name'];
                $_POST['location'] = "Doc/".$file['name'];
                $this->fileModel->newFile($_POST);
                header("Location: " . $_SERVER["HTTP_REFERER"]);
                /*
                $this->fileModel->newFile($_POST);*/
            }
        }

        public function edit()
        {
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $file = $this->fileModel->getById($id);
                $areas = new Area;
                $areas = $areas->getAll();
            }else{
                echo "El archivo no existe";
            }
        }

        public function update()
        {
            if (isset($_POST)) {
                $this->fileModel->editFile($_POST);
            }else{
                echo "Error, accion no permitida";
            }
        }

        public function delete()
        {
            $this->fileModel->deletefile($_REQUEST);
        }
    }