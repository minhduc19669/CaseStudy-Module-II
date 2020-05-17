<?php
declare(strict_types=1);
namespace ModelCase;
use PDO;
use PDOException;
class DatabaseConnection
{
    private $dsn;
    private $username;
    private $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->password = $password;
        $this->username = $username;
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die('Kết nối thất bại');
        }
        return $conn;
    }
}