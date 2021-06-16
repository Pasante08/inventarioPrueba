<?php

    /**
     * Clase modelo Cargo
     */
    class Charge
    {

      private $id;
      private $name;
      private $area_id;
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
        try {
          $strSql = "SELECT c.*,
              a.name as area
              FROM charge c
              INNER JOIN area a
              ON a.id = c.area_id";
          return $this->pdo->select($strSql);
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }

      public function getAllExp($id, $idArea)
      {
        try {
          $strSql = "SELECT *
                FROM charge
                WHERE id <> :id";
                /*AND area_id =".."";*/
          $arrayData = ['id' => $id];
          /*print($strSql);
          die();*/
          /*print_r($arrayData);
          die();*/
          return $this->pdo->select($strSql, $arrayData);
          /*print_r($res);
          die();*/
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }

      public function listCharges($id)
      {
        try {
          $strSql = "SELECT c.*
              FROM charge c
              INNER JOIN area a
              ON a.id = c.area_id
              WHERE a.id=:id";
          $arrayData = ['id' => $id];
          return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }

      public function newCharge($data)
      {
        try {
          $this->pdo->insert("charge", $data);
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }

      public function getById($id)
      {
        try {
          $strSql = "SELECT * FROM charge WHERE id=:id";
          $arrayData = ['id' => $id];
          return $this->pdo->select($strSql, $arrayData);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
      }

      public function editCharge($data)
      {
        try {
          $strWhere = 'id ='. $data['id'];
          $table = 'charge';
          $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
          die($e->getMessage());
        }
      }

      public function deleteCharge($data)
      {
        try {
          $strWhere = 'id ='. $data['id'];
          $table = 'charge';
          $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
          die($e->getMessage());
        }

      }
    }
