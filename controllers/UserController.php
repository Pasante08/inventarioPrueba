<?php

    require 'models/UserModel.php';
    require 'models/sedeModel.php';
    require 'models/chargeModel.php';
    require 'models/areaModel.php';
    require 'models/fileModel.php';

    class userController
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = new User;
        }

        public function Index()
        {
            $users = $this->userModel->getAll();
            require 'views/layout.php';
            require 'views/users/listUser.php';
        }

        public function listArchive()
        {
          if (isset($_REQUEST['id'])) {
              $id = $_REQUEST['id'];
              $files = new File;
              $files = $files->getAll($id);
              require 'views/file/listArchive.php';
          }
        }

        public function listArchiveAdmin()
        {
          if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
              $files = new File;
              $files = $files->getAll($id);
              require 'views/layout.php';
              require 'views/file/listArchiveAdmin.php';
          }
        }

        public function newUser()
        {
              $sedes = new Sede;
              $sedes = $sedes->getAll();
              $areas = new Area;
              $areas = $areas->getAll();
              require 'views/layout.php';
              require 'views/users/newUser.php';
        }

        /*public function chargeArea()
        {
          if (isset($_POST['area'])) {
            $id = $_POST['area'];
            print($id);
            die();
            $charges = new Charge;
            $charges = $charges->listCharges($id);
            foreach ($charges as $charge) {
              echo '<option value='.$charge->id.'>'.$charge->name.'</option>';
            }
          }
        }*/

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
                header('Location: ?controller=user');
              }
            } catch (Exception $e) {
              die($e->getMessage());
            }
        }

        public function listGeneral()
        {
          $list = $this->userModel->list();
          require 'views/listGeneral.php';
        }

        public function edit()
        {
          try {
            if (isset($_REQUEST['id'])) {
              $id = $_REQUEST['id'];
              $users = $this->userModel->getById($id);
              /*print_r($users);
              die();*/
              $sedes = new Sede;
              $charges = new Charge;
              $areas = new Area;
              $sedes = $sedes->getAll();
              $sdes1 = getAll();
              $charges = $charges->getAll($userChargeId);
              $charges1 =
              $areas = $areas->getAll();
              /*foreach ($charges as $charges) {
                if($charges->id == $users[0]->charge_id){
                    foreach ($areas as $areas) {
                        if($charges->area_id == $areas->id){
                            echo $areas->name;
                            die();
                        }else{
                            echo "Error";
                            die();
                        }
                    }
                }*/
              /*print_r($areas);
              die();*/
              require 'views/layout.php';
              require 'views/users/editUser.php';
            }else{
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
              header('Location: ?controller=user');
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
          header('Location: ?controller=user');
        }

        public function ctrIngreso()
        {
            if (isset($_POST['user'])) {
                $user = trim($_POST['user']);
                $password = $_POST['password'];
                $res = $this->userModel->login($user, $password);
                if ($res != null) {
                    if ($res[0]->user == $user && $res[0]->password == $password) {
                        $_SESSION["validateLogin"] = "correct";
                        echo "<script>
                        if(window.history.replaceState)
                        {
                            window.history.replaceState(null, null, window.location.href);
                        }
                        </script>";
                        if ($res[0]->name != 'Sistemas') {
                          header('Location: ?controller=user&method=listArchive&id='.$res[0]->name.'');
                        }else{
                          require 'views/layout.php';
                          require 'views/index.php';
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

        public function close()
        {
          /*session_destroy();
          echo '<script> window.location = "index.html"; </script>';*/
          require 'views/close.php';
        }
    }
