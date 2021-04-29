<?php

    require 'models/UserModel.php';

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
                    $user = array();
                    $equipo = array();
                    $i = 0;
                    foreach ($_POST as $key => $value) {
                        if ($i < 8) {
                            $user[$key] = $_POST[$key];
                            $i++;
                        }elseif ($key != "job") {
                            $equipo[$key] = $_POST[$key];
                        }
                    }
                    foreach ($user as $key => $value) {
                        if ($key == id) {
                            $equipo["user_id"] = $user[$key];
                        }
                    }
                    $this->userModel->newUser($user);
                    //$this->computerModel->newEquipo($equipo);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function edit()
        {

        }

        public function update()
        {

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
