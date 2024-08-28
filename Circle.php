<?php
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }

    public function getRadius() {
        return $this->radius;
    }
}
 
// Create a new Circle object with a radius of 5
$circle = new Circle(5);

// Display the radius, area, and circumference
echo "Radius: " . $circle->getRadius() . "<br>";
echo "Area: " . $circle->getArea() . "<br>";
echo "Circumference: " . $circle->getCircumference() . "<br>";
?>
