<?php
declare(strict_types=1);


namespace controllerCase;
use ModelCase\DatabaseConnection;
use ModelCase\loginDB;
use ModelCase\login;
class LoginController
{
    private $loginDB;

    public function __construct()
    {
        $conn = new DatabaseConnection('mysql:host=localhost;dbname=carcompany', 'root', 'minhphong2405');
        $this->loginDB = new loginDB($conn->connect());
    }

    public function checklogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'View/login.php';
        }else{
                $username = $_POST['account'];
                $password = $_POST['password'];
                $result=$this->loginDB->login($username,$password);
                if ($result==null){
                    $alert="Tài khoản hoặc mật khẩu không đúng!";
                }else{
                    $_SESSION['login']=$result;
                    header('location:index.php');
                }
                include 'View/login.php';
        }
    }
    public function checklogout()
    {
        if (isset($_SESSION['login'])) {
            session_destroy();
            header('location:index.php');
        }
    }

}