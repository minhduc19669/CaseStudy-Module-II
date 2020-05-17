<?php
declare(strict_types=1);
namespace ModelCase;

class Student
{
    public $studentName;
    public $studentBirthday;
    public $phoneNumber;
    public $address;
    public $lopID;
    public function __construct($lopID,$studentName,$studentBirthday,$phoneNumber,$address)
    {
        $this->studentName=$studentName;
        $this->studentBirthday=$studentBirthday;
        $this->phoneNumber=$phoneNumber;
        $this->address=$address;
        $this->lopID=$lopID;
    }

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getLopID()
    {
        return $this->lopID;
    }

    /**
     * @param mixed $lopID
     */
    public function setLopID($lopID): void
    {
        $this->lopID = $lopID;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getStudentBirthday()
    {
        return $this->studentBirthday;
    }

    /**
     * @return mixed
     */
    public function getStudentCode()
    {
        return $this->studentCode;
    }

    /**
     * @return mixed
     */
    public function getStudentForte()
    {
        return $this->studentForte;
    }

    /**
     * @return mixed
     */
    public function getStudentID()
    {
        return $this->studentID;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param mixed $studentBirthday
     */
    public function setStudentBirthday($studentBirthday)
    {
        $this->studentBirthday = $studentBirthday;
    }

    /**
     * @param mixed $studentCode
     */
    public function setStudentCode($studentCode)
    {
        $this->studentCode = $studentCode;
    }

    /**
     * @param mixed $studentForte
     */
    public function setStudentForte($studentForte)
    {
        $this->studentForte = $studentForte;
    }

    /**
     * @param mixed $studentID
     */
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;
    }

    /**
     * @param mixed $studentName
     */
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }



}