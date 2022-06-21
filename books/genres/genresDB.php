<?php

$dbhost="localhost";
$dbname ="test-book";
$username = "root";
$password = "root";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

// Получение всех книг боевиков
function get_actions_all(){
    global $db;
    $books = $db->query("SELECT * FROM action_books");
    return $books;
}
// страница боевика
function get_single_actions_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM action_books WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
// получение всех книг истроических проз
function get_historical_prose_all(){
    global $db;
    $books = $db->query("SELECT * FROM historical_prose");
    return $books;
}
// страницы исторической прозы
function get_single_historical_prose_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM historical_prose WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
// получение всех любовных романов
function get_romance_novels_all(){
    global $db;
    $books = $db->query("SELECT * FROM romance_novels");
    return $books;
}
// страница любовных романов
function get_single_romance_novels_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM romance_novels WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
// получение всех подростковых проз
function get_teen_prose_all(){
    global $db;
    $books = $db->query("SELECT * FROM teen_prose");
    return $books;
}
// страница подростковой прозы
function get_single_teen_prose_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM teen_prose WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// получение всех поэзий
function get_poetry_all(){
    global $db;
    $books = $db->query("SELECT * FROM poetry");
    return $books;
}
// страница поэзии
function get_poetry_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM poetry WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}

// получение всех хорроров
function get_horror_all(){
    global $db;
    $books = $db->query("SELECT * FROM horror");
    return $books;
}
// страница хорроров
function get_horror_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM horror WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
// получение всех попаданцев
function get_portal_traveler_all(){
    global $db;
    $books = $db->query("SELECT * FROM portal_traveler");
    return $books;
}
// страница попаданцев
function get_portal_traveler_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM portal_traveler WHERE id=$id");
    foreach ($singles as $single) {
        return $single;
    }
}
?>