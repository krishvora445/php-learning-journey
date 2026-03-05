<?php
try {
    $pdo = new PDO('sqlite::memory:');
    echo "SQLite PDO driver is working correctly.\n";
    echo "Loaded extensions correctly:\n";
    print_r(PDO::getAvailableDrivers());
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Available Drivers: ";
    print_r(PDO::getAvailableDrivers());
}
