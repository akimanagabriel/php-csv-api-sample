<?php
$users = [];
$file = "db.csv";

function getAllUsers()
{
    global $file, $users;
    // read a csv data
    $handle = fopen($file, "r");
    while ($data = fgetcsv($handle)) {
        $keys = ["name", "telephone"];
        $assocArr = array_combine($keys, $data);
        array_push($users, $assocArr);
    }
    print json_encode($users);
    fclose($handle);
}

function addUser($arr)
{
    global $users, $file;
    $handle = fopen($file, "a");
    fputcsv($handle, $arr);
    print json_encode("data inserted");
    fclose($handle);
}