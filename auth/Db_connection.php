<?php

class Db_connection
{
    private $dsn;
    private $username;
    private $password;
    private $pdo;

    protected function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    protected function connect()
    {

        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(["Internal Server Error:" => $e->getMessage()]);
            exit();
        }
    }
}