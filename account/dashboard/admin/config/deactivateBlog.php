<?php
session_start(); 
include '../../../auth/dbConfig.php';

//get blog id
$bid = $_GET['bid'];

//deactivate blog
$stmt = $conn->prepare('UPDATE blog b
    set
    b.is_published = 0
    where id = '.$bid.' ');

$stmt->execute();
header("Location: ../../../../pages/blog/index.php");
