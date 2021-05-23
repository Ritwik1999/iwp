<?php

require_once "Person.php";
require_once "Student.php";

$student = new Student("Ritwik", "Neema", "1234", 21);
echo '<pre>';
var_dump($student);
echo '</pre>';