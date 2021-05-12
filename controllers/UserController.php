<?php

    require 'models/UserModel.php';
    require 'models/sedeModel.php';
    require 'models/chargeModel.php';

    class userController
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = new User;
        }

        public function Index()
        {
            require 'views/index.php';
        }

        public function newUser()
        {
              require 'views/newUser.php';
        }

        public function save()
        {
            try {
              if (isset($_POST['name'])) {
                $this->userModel->newUser($_POST);
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
              $user = $this->userModel->getById($id);
              $sedes = new Sedes;
              $charges = new Charges;
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
