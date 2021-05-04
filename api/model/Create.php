<?php
// 'user' object
class Create {
    // database connection and table name
    private $conn;
    private $task_table = 'task';
    // object properties
    public $city;
    public $value;
    // constructor
    public function __construct($db) {
        $this->conn = $db;
    }
   
    
    function createTask($job,$status){

        $query = "INSERT INTO " . $this->task_table . " SET job = :job, status = :status";
        // prepare the query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $job = htmlspecialchars(strip_tags($job));
        $status = htmlspecialchars(strip_tags($status));
        // bind the values
        $stmt->bindParam(':job', $job);
        $stmt->bindParam(':status', $status);
        // execute the query, also check if query was successful
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>