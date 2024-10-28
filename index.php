<?php

include "utils.php";

$method = $_SERVER['REQUEST_METHOD'];

// getAllUsers();

// addUser();

switch ($method) {
    case 'GET':
        getAllUsers();
        break;
    case 'POST':
        // read json data from client
        $data = file_get_contents("php://input");
        // convert json data into php array
        $arr = json_decode($data, true); 
        addUser($arr);
        break;

    default:
        $msg = json_encode(["error" => "Invalid request method"]);
        print ($msg);
}

