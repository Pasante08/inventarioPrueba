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
              
        }

        public function save()
        {
            
        }

        public function edit()
        {
            
        }

        public function update()
        {

        }

        public function delete()
        {
            
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