
<?php
    session_start();
     include '../../../auth/dbConfig.php';

    //get session user id
    $userID = $_SESSION['id'];

    //add new admin user to users table
    $addUser = $conn->prepare("INSERT INTO users (username, password, email, active, is_admin, firstname, lastname) VALUES(?, ?, ?, 1, 1, ?, ?);");
    $addUser->bind_param('sssss', $_POST['username'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname'] );
    $addUser->execute();


    header("Location: ../pages/user.php");

?>
