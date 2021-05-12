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
        }

        public function new()
        {
            $areas = new Area;
            $areas = $areas->getAll();
        }

        public function save()
        {
            $this->fileModel->newFile($_POST);
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