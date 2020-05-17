<?php
declare(strict_types=1);

namespace ModelCase;

class classDB
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllClass()
    {
        $sql = "select * from `lophoc`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $class = $stmt->fetchAll();
    }

    public function getStudentinClass($id)
    {
        $sql = "select * from `sinhvien` where lopID=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function addClass($result)
    {
        $sql = "insert into `lophoc` (`tenlop`,`chunhiem`,`phonghoc`) values(?,?,?) ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $result[0]);
        $stmt->bindParam(2, $result[1]);
        $stmt->bindParam(3, $result[2]);
        return $stmt->execute();
    }

    public function findByGroupById($id)
    {

        $sql1 = "select lophoc.lopID, lophoc.tenlop, COUNT(sinhvien.lopID) as 'totalStudent' from `lophoc` join sinhvien on lophoc.lopID = sinhvien.lopID WHERE lophoc.lopID = $id GROUP BY sinhvien.lopID";
        $stmt1 = $this->conn->query($sql1);
        return $stmt1->fetch();

    }

    public function deleteClass($id)
    {
        $sql = "delete from `lophoc` where lopID=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

}
