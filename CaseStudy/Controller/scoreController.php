<?php
declare(strict_types=1);


namespace controllerCase;

use ModelCase\DatabaseConnection;

class scoreController
{
    private $scoreDB;

    public function __construct()
    {
        $conn = new DatabaseConnection('mysql:host=localhost;dbname=carcompany', 'root', 'minhphong2405');
        $this->scoreDB = new scoreDB($conn->connect());
    }

    public function getScore()
    {
        $result = $this->scoreDB->viewScore();
        include 'View/score/xemdiem.php';
    }

    public function editScore()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $scoreStudent = $this->scoreDB->getScorebyID($id);
            include 'View/score/suadiem.php';
        } else {
            $id = $_POST['id'];
            $php = $_POST['php'];
            $java = $_POST['java'];
            $python = $_POST['python'];
            $js = $_POST['js'];
            $result = [$php, $java, $python, $js];
            $this->scoreDB->updateScore($id, $result);
            header('location: index.php?url=viewscore');
        }
    }

}