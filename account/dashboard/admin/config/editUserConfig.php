
<?php
    session_start();
     include '../../../auth/dbConfig.php';

     //get user id
    $userID = $_GET['userID'];

    //update user table by user id
    $stmt = $conn->prepare('UPDATE theatre2.users
    
        SET
        username = ?,
        email = ?,
        firstname =?,
        lastname =?,
        address =?,
        city =?,
        post_code =?
        where id = ' . $userID . ' ');

    $stmt->bind_param('sssssss', $_POST['username'], $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['address'], $_POST['city'],$_POST['post_code'] );
    $stmt->execute();


    header("Location: ../../user/userDetails.php");

?>