<?php
session_start(); 
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../../../login/');
    exit;
}
//get blog id
$bid = $_GET['bid'];

//activate/publish blog
$stmt = $conn->prepare('UPDATE blog b
    set
    b.is_published = 1
    where id = '.$bid.' ');

$stmt->execute();
header("Location: ../../../../pages/blog/index.php");
