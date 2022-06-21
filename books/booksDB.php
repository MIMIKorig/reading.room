<?php

$dbhost="localhost";
$dbname ="test-book";
$username = "root";
$password = "root";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// Получение всех статей
function get_books_all(){
    global $db;
    $books = $db->query("SELECT * FROM table_1_grid_view");
    return $books;
}

function get_single_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM table_1_grid_view WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
?>