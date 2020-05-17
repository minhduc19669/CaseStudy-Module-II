
<?php
require_once "Model/DatabaseConnection.php";
require_once 'Model/StudentDB.php';
require_once 'Model/Student.php';
require_once 'Controller/StudentController.php';
require_once 'Controller/HomeController.php';
require_once 'Model/loginDB.php';
require_once 'Model/login.php';
require_once 'Controller/LoginController.php';
require_once 'Controller/scoreController.php';
require_once 'Model/scoreDB.php';
require_once 'Model/classDB.php';
require_once 'Controller/classController.php';
use controllerCase\classController;
use controllerCase\scoreController;
use controllerCase\HomeController;
use controllerCase\LoginController;
use controllerCase\StudentController;
?>

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SM - Trang chủ</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/fontawesome/css/all.css">
    		<link rel="shortcut icon" href="image/logokhoa.ico">
</head>
<body>
<header>
    <div class="container">
        <div id="logo">
            <a href="index.php">STUDENT MANAGER</a>
        </div>
        <div id="accountName">
            <p> Xin chào ! </p>
            <a href="index.php?url=logout" alt="Đăng xuất"> <img src="image/logout.png" width="25px"> </a>
        </div>
    </div>
</header>
<div class="body">
    <div class="container">
        <div id="menu">
            <ul>
                <li><a class="intro" id="current" href="index.php"><i class="fas fa-home"></i>Trang chủ</a></li>
                <li><a class="intro" href="index.php?url=viewlop"><i class="fas fa-users"></i>LỚP</a></li>
                <li><a class="intro" href="index.php?url=listsinhvien"><i class="fas fa-graduation-cap"></i>SINH VIÊN</a></li>
                <li><a class="intro" href=""><i class="fas fa-chalkboard-teacher"></i>GIẢNG VIÊN</a></li>
                <li><a class="intro" href="index.php?url=viewscore"><i class="fas fa-check"></i>ĐIỂM THI</a></li>
                <li><a class="intro" href=""><i class="fas fa-address-book"></i>CONTACT</a></li>
            </ul>
        </div>
        <?php
        $controller_Class=new classController();
        $controller_Score=new scoreController();
        $controller_Login=new LoginController();
        $controller_Home=new HomeController();
        $controller_Student=new StudentController();
        $url=isset($_REQUEST['url'])? $_REQUEST['url'] : NULL;
        switch ($url){
            case 'viewstudentinclass':
                $controller_Class->viewStudentinClass();
                break;
            case 'viewlop':
                $controller_Class->getClass();
                break;
            case 'addclass':
                $controller_Class->addClass();
                break;
            case 'deleteclass':
                $controller_Class->deleteClass();
                break;
            case 'editscore':
                $controller_Score->editScore();
                break;
            case 'viewscore':
                $controller_Score->getScore();
                break;
            case 'addsinhvien':
                $controller_Student->create();
                break;
            case 'editsinhvien':
                $controller_Student->edit();
                break;
            case 'deletesinhvien':
                $controller_Student->delete();
                break;
            case 'logout':
                $controller_Login->checklogout();
                break;
            case 'listsinhvien':
                $controller_Student->index();
                break;
            case 'detailsinhvien':
                $controller_Student->detailsinhvien();
                break;
            default:
                $controller_Home->getHome();
                break;
        }
        ?>
    </div>
</div>
</body>
</html>