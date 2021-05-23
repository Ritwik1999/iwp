<?php

class Person
{
    public string $name;
    public string $surname;
    private ?int $age;
    private static int $counter = 0;

    // Constructor
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }

    public function set_age($age)
    {
        $this->age = $age;
    }

    public function get_age()
    {
        return $this->age;
    }

    public static function get_counter()
    {
        return self::$counter;
    }
}