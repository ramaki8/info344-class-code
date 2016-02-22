<<<<<<< HEAD
<?php
function getConnection() {
    require_once 'secret/db-credentials.php'; //php will totally fail if we cant find the file. Variables in secret will be local to this function!
    
    try {
        $conn = new PDO("mysql:host=$dbHost;dbname=$dbDatabase", $dbUser, $dbPassword);
=======
<?php 
function getConnection() {
    require_once 'secret/db-credentials.php';
    
    try {
        $conn = new PDO("mysql:host={$dbHost};dbname={$dbDatabase}", 
              $dbUser, $dbPassword);
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
        
        return $conn;
        
    } catch(PDOException $e) {
        die('Could not connect to database ' . $e);
    }
}

?>