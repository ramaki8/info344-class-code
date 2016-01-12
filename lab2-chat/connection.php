<?php
function getConnection() {
    require_once 'secret/db-credentials.php'; //php will totally fail if we cant find the file. Variables in secret will be local to this function!
    
    try {
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPassword);
        
        return $conn;
        
    } catch(PDOException $e) {
        die('Could not connect to database ' . $e);
    }
}

?>