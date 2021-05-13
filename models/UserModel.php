<?php

class User{

    private $name;
    private $userSap;
    private $user;
    private $password;
    private $ext;
    private $sede_id;
    private $charge_id;
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
    public function getAll()
    {
        try {
            $strSql = "SELECT u.*,
                s.name as sede,
                c.name as charge
              FROM users u
              INNER JOIN sede s
              ON s.id = u.sede_id
              INNER JOIN charge c
              ON c.id = u.charge_id";
            return $this->pdo->select($strSql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function list()
    {
        try {
            $strSql = "SELECT u.id, e.ip, u.name AS user, w.name, c.name AS charge FROM users AS u
                INNER JOIN equipo AS e
                ON u.id = e.user_id
                INNER JOIN workstation AS w
                ON w.id = e.Workstation_id
                INNER JOIN charge AS c
                ON c.id = u.charge_id";
                return $this->pdo->select($strSql);
        } catch (\PDOException $e) {
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
