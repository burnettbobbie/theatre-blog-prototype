
<?php
    session_start();
     include '../../../auth/dbConfig.php';

    //get blog id
    $blogID = $_GET['bid'];

    //update blog table
    $stmt = $conn->prepare('UPDATE theatre2.blog
    
        SET
        title = ?,
        description = ?,
        start_date =?,
        end_date =?,
        blog_content =?,
        img_path =?,
        show_name =?
        where id = ' . $blogID . ' ');


    $stmt->bind_param('sssssss', $_POST['title'], $_POST['description'], $_POST['start_date'], $_POST['end_date'], $_POST['blog_content'],$_POST['img_path'],$_POST['show_name'] );
    $stmt->execute();


    header("Location: ../../../../pages/blog/");

?>