<?php
declare(strict_types=1);
namespace controllerCase;


class scoreDB{
    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
    }

    public function viewScore(){
        $sql="select * from `diemthi_view`";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        return $result= $stmt->fetchAll();
    }
    public function getScorebyID($id){
        $sql="select * from `diemthi_view` where sinhvienID=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $result=$stmt->fetch();
    }
    public function updateScore($id,$result){
        $sql="update `diemthi_view` set `PHP`=?,`JAVA`=?,`PYTHON`=?,`JS`=? where `sinhvienID`=?";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(1,$result['0']);
        $stmt->bindParam(2,$result['1']);
        $stmt->bindParam(3,$result['2']);
        $stmt->bindParam(4,$result['3']);
        $stmt->bindParam(5,$id);
        $stmt->execute();
    }



}