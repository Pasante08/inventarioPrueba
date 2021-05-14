<?php

    require 'models/chargeModel.php';
    require 'models/areaModel.php';

    class chargeController
    {
        private $chargeModel;

        public function __construct()
        {
            $this->chargeModel = new Charge;
            $this->areaModel = new Area;
        }

        public function Index()
        {
            require 'views/index.php';
        }

        public function newCharge()
        {
              $areas = new Area;
              $areas = $areas->getAll();
              foreach ($areas as $areas) {
                echo '<option value='.$areas->id.'>'.$areas->name.'</option>';
              }
          }

        public function save()
        {
            try {
                if (isset($_POST['name'])) {
                    $this->chargeModel->newCharge($_POST);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function edit()
        {
            if (isset($_REQUEST['id'])) {
                $id = $_REQUEST['id'];
                $charge = $this->chargeModel->getById($id);
                $areas = new Area;
                $areas = $areas->getAll();
            }else{
                echo "El cargo no existe";
            }
        }

        public function update()
        {
            if (isset($_POST)) {
                $this->chargeModel->editCharge($_POST);
            }else{
                echo "Error, accion no permitida";
            }
        }

        public function delete()
        {
            $this->chargeModel->deleteCharge($_REQUEST);
        }
    }
