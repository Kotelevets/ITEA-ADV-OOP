<?php

class Person
{
    const MAX_POSSIBLE_AGE = 50;

    private static $maxAge = 0;

    private $username;
    private $email;
    private $age;

    /**
     * @return int
     */
    public static function getOldest()
    {
        return self::$maxAge;
    }

    /**
     * Person constructor.
     * @param $username
     * @param $email
     */
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email    = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
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
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age > self::MAX_POSSIBLE_AGE) {
            echo "Can't create person with provided age " . $age . \PHP_EOL;
            return;
        }

        $this->age = $age;

        if ($age > self::$maxAge) {
            self::$maxAge = $age;
        }
    }
}
