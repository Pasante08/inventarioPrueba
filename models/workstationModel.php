<?php

    class Workstation
    {
        private $id;
        private $name;
        private $pdo;

        public function __construct()
        {
            try {
                $this->pdo = new Database;
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getAll()
        {
            try{
                $strSql = "SELECT * FROM workstation";
                return $this->pdo->select($strSql);
            } catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function newWorkstation($data)
        {
            try{
                $this->pdo->insert("workstation", $data);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getById($id)
        {
            try {
                $strSql = "SELECT * FROM Workstation WHERE id=:id";
                $arrayData = ['id' => $id];
                return $this->pdo->select($strSql, $arrayData);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function editWorkstation($data)
        {
            try {
                $strWhere = 'id ='. $data['id'];
                $table = 'workstation';
                $this->pdo->update($table, $data, $strWhere);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }