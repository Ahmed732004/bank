<?php
class Logger {
    public static $logCount = 0;

    public static function log($message) {
        echo $message . "<br>";
        self::$logCount++;
    }
}
// Log some messages
Logger::log("First log message.");
Logger::log("Second log message.");
Logger::log("Third log message.");

// Display the total log count
echo "Total log count: " . Logger::$logCount . "<br>";
?>
