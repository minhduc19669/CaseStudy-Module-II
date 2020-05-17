<?php
declare(strict_types=1);

namespace ModelCase;

class StudentDB
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addStudent($student)
    {

        $sql = "insert into `sinhvien` (`name`,`birthday`,`phonenumber`,`address`,`lopID`) values (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $student->studentName);
        $stmt->bindParam(2, $student->studentBirthday);
        $stmt->bindParam(3, $student->phoneNumber);
        $stmt->bindParam(4, $student->address);
        $stmt->bindParam(5, $student->lopID);
        return $stmt->execute();
    }

    public function getAll()
    {
        $sql = "select * from `sinhvien_view`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $students = [];
        foreach ($result as $row) {
            $student = new Student($row['lopID'], $row['name'], $row['birthday'], $row['phonenumber'], $row['address']);
            $student->sinhvienID = $row['sinhvienID'];
            $student->lop=$row['tenlop'];
            $students[] = $student;
        }
        return $students;
    }

    public function get($id)
    {
        $sql = "select * from `sinhvien_view` where `sinhvienID`=? ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result) {
            $student = new Student($result['lopID'], $result['name'], $result['birthday'], $result['phonenumber'], $result['address']);
            $student->sinhvienID = $result['sinhvienID'];
            $student->tenlop = $result['tenlop'];
            return $student;
        }
        return $error="Không có sinh viên này";
    }

    public function edit($id, $student)
    {
        $sql = "update `sinhvien` set `name`=?,`birthday`=?,`phonenumber`=?,`address`=?,`lopID`=? where `sinhvienID`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $student->studentName);
        $stmt->bindParam(2, $student->studentBirthday);
        $stmt->bindParam(3, $student->phoneNumber);
        $stmt->bindParam(4, $student->address);
        $stmt->bindParam(5, $student->lopID);
        $stmt->bindParam(6, $id);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "delete from `sinhvien` where `sinhvienID`=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
    public function getAllClass()
    {
        $sql = "select * from `lophoc`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $class = $stmt->fetchAll();
    }
}