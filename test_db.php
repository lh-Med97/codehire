<?php
try {
    $pdo = new PDO(
        "mysql:host=127.0.0.1;port=3306;dbname=codehire",
        "root",
        "",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
    echo "Successfully connected to MySQL!\n";
    
    // Try to create a test table
    $pdo->exec("CREATE TABLE IF NOT EXISTS test_connection (id INT)");
    echo "Successfully created test table!\n";
    
    // List all tables
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "Current tables in database:\n";
    print_r($tables);
    
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
