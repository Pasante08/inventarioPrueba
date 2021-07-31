<?php

    require 'models/computerModel.php';
    require 'models/userModel.php';
    require 'models/workstationModel.php';
    require 'models/areaModel.php';

    class computerController
    {
        private $computerModel;

        public function __construct()
        {
            $this->computerModel = new Computer;
        }

        public function Index()
        {
            $equipos = $this->computerModel->getAll();
            require 'views/layout.php';
            require 'views/equipo/listEquipo.php';
        }

        public function newEquipo()
        {
            $users = new User;
            $users = $users->getAll();
            $workstation = new Workstation;
            $workstation = $workstation->getAll();
            require 'views/layout.php';
            require 'views/equipo/newEquipo.php';
        }

        public function validateIP()
        {
          if(isset($_POST['ip'])) {
              $ip = $_POST['ip'];
              $validate = $this->computerModel->validateIP($ip);
              if (count($validate)>0) {
                echo "<span class='validate'>Esta dirección IP ya existe.</span>";
              } else {
                echo "<span></span>";
              }
          }
        }

        public function save()
        {
            try {
                if (isset($_POST['computer'])) {
                  $this->computerModel->newEquipo($_POST);
                  header('Location: ?controller=computer');
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
              $equipo =  $this->computerModel->getById($id);
              $users = new User;
              $workstation = new Workstation;
              $users = $users->getAll();
              $workstation = $workstation->getAll();
              require 'views/layout.php';
              require 'views/equipo/editEquipo.php';
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
            echo "<script>alert('Usuario actualizado correctamente');
                 window.history.go(-2);</script>";
            header('Location: ?controller=computer');
          }else {
            echo "Error, acciòn no permitida";
          }
        }

        public function delete()
        {
            $this->computerModel->deleteEquipo($_REQUEST);
            header('Location: ?controller=computer');
        }
    }
