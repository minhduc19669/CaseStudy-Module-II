<?php
declare(strict_types=1);


namespace controllerCase;

use ModelCase\classDB;
use ModelCase\DatabaseConnection;

class classController
{
    private $classDB;

    public function __construct()
    {
        $conn = new DatabaseConnection('mysql:host=localhost;dbname=carcompany', 'root', 'minhphong2405');
        $this->classDB = new classDB($conn->connect());
    }

    public function getClass()
    {
        $result = $this->classDB->getAllClass();
        include 'View/lophoc/dslop.php';
    }

    public function viewStudentinClass()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $result = $this->classDB->getStudentinClass($id);
            include 'View/lophoc/detailclass.php';
        }
    }

    public function addClass()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'View/lophoc/themlop.php';
        } else {
            $result = [$_POST['ten'], $_POST['gvcn'], $_POST['phonghoc']];
            $this->classDB->addClass($result);
            $alert = "Thêm thành công";
            header('location:index.php?url=viewlop');
        }
    }

    public function deleteClass()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //include 'View/dslop.php';
            $id = $_GET['id'];
            $group = $this->classDB->findByGroupById($id);
            if ($group['totalStudent'] > 0) {
                $_SESSION['xoalop'] = "Lớp có sinh viên không thể xóa";
            } else {
                $this->classDB->deleteClass($id);
                header('location: index.php?url=viewlop');
            }
        }
    }

}