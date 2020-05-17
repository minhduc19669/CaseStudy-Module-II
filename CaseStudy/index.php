<?php
declare(strict_types=1);
session_start();
require_once "Model/DatabaseConnection.php";
require_once 'Controller/HomeController.php';
require_once 'Model/loginDB.php';
require_once 'Model/login.php';
require_once 'Controller/LoginController.php';
use controllerCase\HomeController;
use controllerCase\LoginController;
?>
<?php
if (isset($_SESSION['login'])){
    include 'View/HOME.php';
}else{
    $controller_Login = new LoginController();
    $controller_Home=new HomeController();
    $controller_Login->checklogin();
}
?>

