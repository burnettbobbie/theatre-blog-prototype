<?php
session_start(); 
include '../../../auth/dbConfig.php';


//get user id
$uid = $_GET['uid'];

//deactivate user
$stmt = $conn->prepare('UPDATE users usr
    set
    usr.active = 0
    where id = '.$uid.' ');

$stmt->execute();
header("Location: ../pages/user.php");
