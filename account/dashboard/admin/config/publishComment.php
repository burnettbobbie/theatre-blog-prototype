<?php
  include '../../../auth/dbConfig.php';

  //get comment id
$cid = $_GET['cid'];

//publish comment
$stmt = $conn->prepare('UPDATE comments c
    set
    c.pending = 0
    where c.id = '.$cid.' ');

$stmt->execute();
header("Location: ../pages/pendingComments.php");
