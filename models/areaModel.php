<?php

  /**
   * Clase Modelo Area
   */
  class Area
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
      try {
        $strSql = "SELECT * FROM area";
        return $this->pdo->select($strSql);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }

    public function newArea($data)
    {
      try {
        $this->pdo->insert("area", $data);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }

    public function getById($id)
    {
      try {
        $strSql = "SELECT * FROM area WHERE id=:id";
        $arrayData = ['id' => $id];
        return $this->pdo->select($strSql, $arrayData);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }

    public function editArea($data)
    {
      try {
        $strWhere = 'id ='. $data['id'];
        $table = 'area';
        $this->pdo->update($table, $data, $strWhere);
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }

    public function deleteArea($data)
    {
      try {
        $strWhere = 'id = '. $data['id'];
        $table = 'area';
      } catch (PDOException $e) {
        die($e->getMessage());
      }

    }
  }
