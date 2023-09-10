<?php
session_start(); 
include '../../../auth/dbConfig.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../../../login/');
    exit;
}
//get user id
$uid = $_GET['uid'];

//activate user
$stmt = $conn->prepare('UPDATE users usr
    set
    usr.active = 1
    where id = '.$uid.' ');

$stmt->execute();
header("Location: ../pages/user.php");
