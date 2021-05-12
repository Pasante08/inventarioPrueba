<?php

    require 'models/ComputerModel.php';

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
                //code...
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
            $this->computerModel->deleteComputer($_REQUEST);
        }
    }
