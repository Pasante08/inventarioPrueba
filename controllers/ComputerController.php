<?php

    require 'models/ComputerModel.php';
    require 'models/userModel.php';
    require 'models/workstationModel.php';

    class computerController
    {
        private $computerModel;

        public function __construct()
        {
            $this->computerModel = new Computer;
        }

        public function Index()
        {
            require 'views/index.html';
        }

        public function newEquipo()
        {
            require 'views/newEquipo.php';
        }

        public function save()
        {
            try {
                if (isset($_POST['computer'])) {
                  $this->computerModel->newEquipo($_POST);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function edit()
        {
          try {
            if (isset($_REQUEST['id'])) {
              $id = $_REQUEST['id'];
              $equipo =  $this->$computerModel->getById($id);
              $users = new Users;
              $workstation = new Workstation;
              $users = $users->getAll();
              $workstation = $workstation->getAll();
            }else{
              echo "El usuario no existe";
            }
          } catch (Exception $e) {
            die($e->getMessage());
          }

        }
        public function update()
        {
          if (isset($_POST)) {
            $this->computerModel->editEquipo($_POST);
          }else {
            echo "Error, acciòn no permitida";
          }
        }

        public function delete()
        {
            $this->computerModel->deleteComputer($_REQUEST);
        }
    }
