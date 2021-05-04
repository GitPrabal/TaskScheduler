<?php
require 'config/constants.php';
require 'config/database.php';
require 'models/Task.php';
require 'models/Create.php';

// get database connection
$database = new Database();
$db = $database->getConnection();
// Check Method Type
if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    http_response_code(405);
    $result = json_encode(array("message" => "Method Not Allowed."));
    return $result;
}

try {

    $createTask = new Create($db);
    $task    = json_decode(file_get_contents("php://input"));
    $data = $createTask->createTask($task->job, $task->status);

    if ( $data ) {
        http_response_code(200);
        echo json_encode(array("message" => "Created."));
    } else {
        http_response_code(500);
        echo json_encode(array("message" => "Internal Server Error."));
    }

}
catch(Exception $e) {
    echo json_encode(array("message" => $e));
}
?>