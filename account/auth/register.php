<?php
include 'dbConfig.php';
// Validate password strength
$password = $_POST['password'];
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
    exit('Username is not valid!');
}
// Password must be between 5 and 20 characters long.
if (!$uppercase || !$lowercase || !$number || !$specialChars ||strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    exit('Password must be between 5 and 20 characters long and should include at least one upper case letter, one number, and one special character!');
}

// check if the account with that username exists.
$stmt = $conn->prepare('SELECT id, password FROM theatre2.users WHERE username = ? ');
$stmt->bind_param('s', $_POST['username']);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    // Username already exists
    echo 'Username exists! Please choose another.';
} else {
    $stmt->close();
    // Username doesnt exist, insert new account
    $stmt = $conn->prepare("INSERT INTO theatre2.users (username, email, password, active, is_admin) VALUES(?, ?, ?, 1, 0);");
  
   
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt->bind_param('sss', $_POST['username'], $_POST['email'], $password);
    $stmt->execute();
    $conn->close();

    echo '<p>You have successfully created an account</p> <a href="../login">Return to Login page</a>';

}

header('Location: ../../pages/login/');







