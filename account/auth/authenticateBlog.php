<?php


require 'dbConfig.php';
session_start();
$blogID = $_GET['blogID'];

// check if the data from the login form was submitted
if (!isset($_POST['username'], $_POST['password'])) {

    exit('Please fill both the username and password field!');
}

//prepare SQL statement to prevent SQL injections
if ($stmt = $conn->prepare('SELECT id, password, is_admin FROM theatre2.users WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $admin);
    
        $stmt->fetch();

        if (password_verify($_POST['password'], $password)) {

            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['is_admin'] = $admin;
            if ($admin == 1) {
                header("Location: ../../blog/details?blogID'.$blogID.' ");
            }
            else{
                header("Location: ../../blog/details?blogID'.$blogID.' ");
            }
            exit();

        } else {
            echo 'Incorrect password!';
        }
    }else {
        echo 'Incorrect username!';
    }
    setcookie("username", $_POST['username'], time() + 86400, "/");


}
