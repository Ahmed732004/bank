<?php
class Student {
    public $name;
    public $age;
    public $grade;

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}
// Create a new Student object
$student = new Student();
$student->name = "Ahmed Mohamed";
$student->age = 20;
$student->grade = "A";

// Display student information
$student->displayInfo();
?>
