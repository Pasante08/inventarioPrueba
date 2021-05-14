<?php

    require 'models/UserModel.php';
    require 'models/sedeModel.php';
    require 'models/chargeModel.php';
    require 'models/areaModel.php';

    class userController
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = new User;
        }

        public function Index()
        {
            require 'views/layout.php';
            require 'views/index.php';
        }

        public function listArchive()
        {
          require 'views/listArchive.php';
        }

        public function newUser()
        {
              $sedes = new Sede;
              $sedes = $sedes->getAll();
              $areas = new Area;
              $areas = $areas->getAll();
              require 'views/layout.php';
              require 'views/newUser.php';
        }

        public function chargesAreas()
        {
          if (isset($_POST['area'])) {
            $id = $_POST['area'];
            $charges = new Charge;
            $charges = $charges->listCharges($id);
            foreach ($charges as $charge) {
              echo '<option value='.$charge->id.'>'.$charge->name.'</option>';
            }
          }
        }

        public function save()
        {
            try {
              if (isset($_POST['name'])) {
                unset($_POST['areasList']);
                $this->userModel->newUser($_POST);
              }
            } catch (Exception $e) {
              die($e->getMessage());
            }
        }

        public function listGeneral()
        {
          $list = $this->userModel->list();
          /*print_r($list);
          die();*/
          require 'views/listUser.php';
        }

        public function edit()
        {
          try {
            if (isset($_REQUEST['id'])) {
              $id = $_REQUEST['id'];
              $user = $this->userModel->getById($id);
              $sedes = new Sede;
              $charges = new Charge;
              $sedes = $sedes->getAll();
              $charges = $charges->getAll();
              require 'views/edit.php';
            }
            else{
              echo "El usuario no existe";
            }
          } catch (Exception $e) {
            die($e->getMessage());
          }

        }

        public function update()
        {
          try {
            if (isset($_POST)) {
              $this->userModel->editUser($_POST);
            }else{
              echo "Error, accion no permitida";
            }
          } catch (Exception $e) {
            die($e->getMessage());
          }

        }

        public function delete()
        {
          $this->userModel->deleteUser($_REQUEST);
        }

        public function ctrIngreso()
        {
            if (isset($_POST['user'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $res = $this->userModel->login($user, $password);
                if ($res != null) {
                    if ($res[0]->user == $_POST['user'] && $res[0]->password == $_POST['password']) {
                        $_SESSION["validateLogin"] = "correct";
                        echo "<script>
                        if(window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }
                        </script>";
                        header ('Location: views/index.php');
                    }
                    else{
                        echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = 'index.html';
                        </script>";
                    }
                }
                else{
                    echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null, null, window.location.href);
                            }
                            window.location = 'index.html';
                        </script>";
                }
            }
        }
    }
