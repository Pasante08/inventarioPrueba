<?php

    class Sede
    {
        private $id;
        private $name;
        private $pdo;

        public function __construct()
        {
            try{
                $this->pdo = new Database;
            }catch (PDOException $e){
                die($e->getMessage());
            }
        }

        public function getAll()
        {
            try{
                $strSql = "SELECT * FROM sede";
                return $this->pdo->select($strSql);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function newSede($data)
        {
            try {
                $this->pdo->insert("sede", $data);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getById($id)
        {
            try{
                $strSql = "SELECT * FROM sede WHERE id=:id";
                $arrayData = ['id' => $id];
                return $this->pdo->select($strSql, $arrayData);
            } catch (PDOException $e){
                die($e->getMessage());
            }
        }

        public function editSede($data)
        {
            try {
                $strWhere = 'id ='. $data['id'];
                $table = 'sede';
                $this->pdo->update($table, $data, $strWhere);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function deleteSede($data)
        {
            try {
                $strWhere = 'id ='. $data['id'];
                $table = 'sede';
                $this->pdo->delete($table, $strWhere);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
    }