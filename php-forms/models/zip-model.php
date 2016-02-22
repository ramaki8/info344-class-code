<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
class Zips {
    protected $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function search($q) {
        $sql = 'select * from zips where zip=? or primary_city=?';
        $stmt = $this->conn->prepare($sql);
<<<<<<< HEAD
        $success = $stmt->execute(array($q, $q)); //returns boolean success or fail
        if (!$success) {
            trigger_error($stmt->errorInfo());
=======
        $success = $stmt->execute(array($q,$q));
        if (!$success) {            
            var_dump($stmt->errorInfo());
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }
}
?>