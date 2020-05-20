<?php

class Mahasiswa_model
{

    private $conn;
    private $state;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=mvc;';

        try {
            $this->conn = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getMahasiswa()
    {
        $this->state = $this->conn->prepare('SELECT * FROM mahasiswa');
        $this->state->execute();
        return $this->state->fetchAll(PDO::FETCH_ASSOC);
    }
}
