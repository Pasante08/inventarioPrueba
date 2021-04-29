<?php

class user{

    private $document;
    private $name;
    private $userSap;
    private $user;
    private $password;
    private $ext;
    private $job;
    private $area;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //Consultar todos los registros de la DB
    public function getALL()
    {
        try {
            $strSql = "SELECT * FROM user ORDER BY id ASC";
            return $this->pdo->select($strSql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //Insertar un nuevo usuario
    public function newUser($data)
    {
        try {
            $this->pdo->insert("users", $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //Editar un usuario
    public function editUser($data)
    {
        try {
            $strWhere = 'id = '.$data['id'];
            $table = 'users';
            $this->pdo->update($table, $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteUser($data)
    {
        try {
            $strWhere = 'id = '.$data['id'];
            $table = 'users';
            $this->pdo->delete($table, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function login($user, $password)
    {
        //try {
            $table = 'users';
            $strSql = "SELECT * FROM $table WHERE user ='$user' AND password = '$password'";
            return $this->pdo->select($strSql);
        //} catch (PDOException $e) {
            //die($e->getMessage());
        //}
    }
}
