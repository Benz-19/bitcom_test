<?php

namespace Hp\BitcomTest;

use PDO;
use PDOException;

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $passw = "";
    private $dbname = "bincomphptest";
    private $conn;

    public function Connection()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
            $this->conn = new PDO($dsn, $this->username, $this->passw);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ATTR_ERRMODE);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }

        return $this->conn;
    }
}
