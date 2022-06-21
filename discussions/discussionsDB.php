<?php

$dbhost="localhost";
$dbname ="test-book";
$username = "root";
$password = "root";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// Получение всех статей
function get_books_all(){
    global $db;
    $discussions = $db->query("SELECT * FROM discussions_table");
    return $discussions;
}

function get_single_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM discussions_table WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
?>