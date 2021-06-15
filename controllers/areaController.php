<?php

    require 'models/areaModel.php';

    /**
     * Clase Controlador Area
     */
    class AreaController
    {

      private $areaModel;

      public function __construct()
      {
        $this->areaModel = new Area;
      }

      public function Index()
      {
        $areas = $this->areaModel->getAll();
        //require 'views/';
      }

      public function new()
      {
        require 'views/new.php';
      }

      public function save()
      {
        $this->areaModel->newArea($_POST);
      }

      public function edit()
      {
        if (isset($_REQUEST['id'])) {
          $id = $_REQUEST['id'];
          $area = $this->areaModel->getById($id);
        }else {
          echo "El area no existe";
        }
      }

      public function update()
      {
        if (isset($_POST)) {
          $this->areaModel->editArea($_POST);
        }else {
          echo "Error, accion no permitida";
        }
      }

      public function delete()
      {
        $this->areaModel->deleteArea($_REQUEST);
      }
    }
