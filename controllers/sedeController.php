<?php

    require 'models/sedeModel.php';

    class SedeController
    {
        private $sedeModel;

        public function __construct()
        {
            $this->sedeModel = new Sede;
        }

        public function Index()
        {
            $sede = $this->sedeModel->getAll();
        }

        public function new()
        {
            require 'views/new.php';
        }

        public function save()
        {
            $this->sedeModel->newSede($_POST);
        }

        public function edit()
        {
            if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];
                $sede = $this->sedeModel->getById($id);
            }else{
                echo "La sede no existe";
            }
        }

        public function update()
        {
            if (isset($_POST)) {
                $this->sedeModel->editSede($_POST);
            }else{
                echo "Error, accion no permitida";
            }
        }

        public function delete()
        {
            $this->sedeModel->deleteSede($_REQUEST);
        }
    }