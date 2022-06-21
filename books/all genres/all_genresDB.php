<?php

$dbhost="localhost";
$dbname ="test-book";
$username = "root";
$password = "root";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// Получение всех книг детективов
function get_detective_all(){
    global $db;
    $books = $db->query("SELECT * FROM detective");
    return $books;
}
// страница боевика
function get_single_detective_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM detective WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}


// Получение всех книг мистики
function get_mystic_all(){
    global $db;
    $books = $db->query("SELECT * FROM mystic");
    return $books;
}
// страница мистики
function get_single_mystic_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM mystic WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// Получение всех приключений
function get_adventure_all(){
    global $db;
    $books = $db->query("SELECT * FROM adventure");
    return $books;
}
// страница приключений
function get_single_adventure_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM adventure WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// Получение всех триллеров
function get_thriller_all(){
    global $db;
    $books = $db->query("SELECT * FROM thriller");
    return $books;
}
// страница триллера
function get_single_thriller_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM thriller WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// Получение всех фантастики
function get_fantasy_all(){
    global $db;
    $books = $db->query("SELECT * FROM fantasy");
    return $books;
}
// страница фантастики
function get_single_fantasy_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM fantasy WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// Получение всех фэнтези
function get_phantasie_all(){
    global $db;
    $books = $db->query("SELECT * FROM phantasie");
    return $books;
}
// страница фэнтези
function get_single_phantasie_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM phantasie WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// Получение всех фэнтези
function get_humor_all(){
    global $db;
    $books = $db->query("SELECT * FROM humor");
    return $books;
}
// страница фэнтези
function get_single_humor_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM humor WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
?>