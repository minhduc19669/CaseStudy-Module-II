<?php
declare(strict_types=1);


namespace ModelCase;
use ModelCase\login;

class loginDB
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn=$conn;
    }
    public function login($username,$password){
        $sql = "select * from `dangnhap` where `account`='$username' and `password`='$password'";
        $stmt= $this->conn->query($sql);
        return $stmt->fetch();
    }

}