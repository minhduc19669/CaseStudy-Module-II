<?php
declare(strict_types=1);


namespace ModelCase;


class TeacherDB
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn=$conn;
    }

}