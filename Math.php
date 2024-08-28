<?php
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}
// Test the add method
echo "Addition (5 + 3): " . Math::add(5, 3) . "<br>";

// Test the subtract method
echo "Subtraction (5 - 3): " . Math::subtract(5, 3) . "<br>";

// Test the multiply method
echo "Multiplication (5 * 3): " . Math::multiply(5, 3) . "<br>";
?>
