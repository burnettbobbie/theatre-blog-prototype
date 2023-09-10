
<?php
    session_start();
     include '../../../auth/dbConfig.php';
    
     //get userID
    $userID = $_SESSION['id'];

    //store input values into blog table
    $addBlog = $conn->prepare("INSERT INTO blog (title,  blog_content, img_path, show_name, is_published) VALUES(?, ?, ?, ?, 1);");
    $addUserBlog = $conn->prepare("INSERT INTO theatre2.userblog (fk_user_id, fk_blog_id) VALUES($userID, LAST_INSERT_ID());");
    $addBlog->bind_param('ssss', $_POST['title'], $_POST['blog_content'], $_POST['img_path'], $_POST['show_name'] );
    $addBlog->execute();
    $addUserBlog->execute();


  

    header("Location: ../../../../pages/blog/");

?>
