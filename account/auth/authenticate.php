<?php

// Start session
require 'dbConfig.php';
session_start();

// check if the data from the login form was submitted, isset() will check if the data exists
if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent
    exit('Please fill both the username and password field!');
}

// Prepare SQL-- prevent SQL injection
if ($stmt = $conn->prepare('SELECT id, password, is_admin FROM theatre2.users WHERE username = ?')) {
    // Bind parameters
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result in database
    $stmt->store_result();
    

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $admin);
    
        $stmt->fetch();

        if (password_verify($_POST['password'], $password)) {

            // Create sessions
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['is_admin'] = $admin;
            if ($admin == 1) {
                header('Location: ../dashboard/admin/');
            }
            else{
                header('Location: ../dashboard/user/');
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
