<?php
declare(strict_types=1);


namespace controllerCase;

use ModelCase\DatabaseConnection;
use ModelCase\Student;
use ModelCase\StudentDB;

class StudentController
{
    private $studentDB;

    public function __construct()
    {
        $conn = new DatabaseConnection('mysql:host=localhost;dbname=carcompany', 'root', 'minhphong2405');
        $this->studentDB = new StudentDB($conn->connect());
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $class = $this->studentDB->getAllClass();
            include "View/sinhvien/themsv.php";
        } elseif (empty($_POST['name']) || empty($_POST['ngaysinh']) || empty($_POST['sdt']) || empty($_POST['quequan']) || empty($_POST['lop'])) {
            $error = "Vui lòng không để trống các trường!";
            include "View/sinhvien/themsv.php";
        } else {
            $name = $_POST['name'];
            $birthDay = $_POST['ngaysinh'];
            $phoneNumber = $_POST['sdt'];
            $address = $_POST['quequan'];
            $classID = $_POST['lop'];
            $student = new Student($classID, $name, $birthDay, $phoneNumber, $address);
            $this->studentDB->addStudent($student);
            $mess = "Thêm thành công";
            include "View/sinhvien/themsv.php";
        }
    }

    public function index()
    {
        $students = $this->studentDB->getAll();
        include 'View/sinhvien/listsinhvien.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $student = $this->studentDB->get($id);
            if ($student) {
                include 'View/sinhvien/suasv.php';
            }else{
                header('location:index.php');
            }

        }else{
            $id = $_POST['id'];
            $name = $_POST['ten'];
            $phoneNumber = $_POST['sdt'];
            $birthday = $_POST['ngaysinh'];
            $address = $_POST['quequan'];
            $classID = $_POST['lop'];
            $student = new Student($classID, $name, $birthday, $phoneNumber, $address);
            $this->studentDB->edit($id, $student);
            header('location: index.php?url=listsinhvien');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $student = $this->studentDB->get($id);
            include 'View/xoasv.php';
        } else {
                $id = $_POST['id'];
                $this->studentDB->delete($id);
                header('location: index.php?url=listsinhvien');
        }
    }
    public function detailsinhvien(){
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            $id=$_GET['id'];
            $student=$this->studentDB->get($id);
            include 'View/sinhvien/chitietsinhvien.php';
        }
    }

}