<?php
declare(strict_types=1);
namespace ModelCase;

class Teacher
{
    private $teacherID;
    private $teacherCode;
    private $teacherName;
    private $teacherEducation;
    private $teacherSpec;
    private $email;
    private $phoneNumber;
    private $avatar;
    public function __construct($teacherID,$teacherCode,$teacherName,$teacherEducation,$teacherSpec,$email,$phoneNumber,$avatar)
    {
        $this->teacherID=$teacherID;
        $this->teacherCode=$teacherCode;
        $this->teacherName=$teacherName;
        $this->teacherEducation=$teacherEducation;
        $this->teacherSpec=$teacherSpec;
        $this->email=$email;
        $this->phoneNumber=$phoneNumber;
        $this->avatar=$avatar;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
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
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getTeacherCode()
    {
        return $this->teacherCode;
    }

    /**
     * @return mixed
     */
    public function getTeacherEducation()
    {
        return $this->teacherEducation;
    }

    /**
     * @return mixed
     */
    public function getTeacherID()
    {
        return $this->teacherID;
    }

    /**
     * @return mixed
     */
    public function getTeacherName()
    {
        return $this->teacherName;
    }

    /**
     * @return mixed
     */
    public function getTeacherSpec()
    {
        return $this->teacherSpec;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $teacherCode
     */
    public function setTeacherCode($teacherCode)
    {
        $this->teacherCode = $teacherCode;
    }

    /**
     * @param mixed $teacherEducation
     */
    public function setTeacherEducation($teacherEducation)
    {
        $this->teacherEducation = $teacherEducation;
    }

    /**
     * @param mixed $teacherID
     */
    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;
    }

    /**
     * @param mixed $teacherName
     */
    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;
    }

    /**
     * @param mixed $teacherSpec
     */
    public function setTeacherSpec($teacherSpec)
    {
        $this->teacherSpec = $teacherSpec;
    }

}