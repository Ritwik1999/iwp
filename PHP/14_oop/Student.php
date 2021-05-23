<?php

require_once "Person.php";

class Student extends Person
{
    public string $student_id;

    public function __construct($name, $surname, $student_id, $age)
    {
        // Since age is private to Person class, the line below would define a new attribute for `$this`
        // $this->age = 20;
        $this->student_id = $student_id;
        parent::__construct($name, $surname);
        $this->set_age($age);
    }
}
