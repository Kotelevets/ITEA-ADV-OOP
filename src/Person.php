<?php

class Person
{
    public $username;
    public $email;
    public $age;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}