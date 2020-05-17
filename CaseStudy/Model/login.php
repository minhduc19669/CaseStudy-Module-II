<?php
declare(strict_types=1);


namespace ModelCase;


class login
{
    private $username;
    private $password;
    public function __construct($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
    }

}