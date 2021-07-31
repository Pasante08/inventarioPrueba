<?php

class Categoria
{
    private $idCategoria;
    private $nombreCategoria;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function newCategoria($data)
    {
        try {
            $this->pdo->insert("categoria", $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}