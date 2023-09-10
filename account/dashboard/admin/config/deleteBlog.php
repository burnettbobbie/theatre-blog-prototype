<?php
    include '../../../auth/dbConfig.php';
    //get blog id
    $blogID = $_GET['bid'];

    //delete comments > instances of users who made the comments > blog itself
    $deleteComments = $conn->prepare('DELETE FROM comments WHERE fk_userblog IN (SELECT id FROM userblog WHERE fk_blog_id = '.$blogID.')');
    $deleteUserBlog = $conn->prepare('DELETE FROM userblog WHERE fk_blog_id = '.$blogID.'');
    $deleteBlog = $conn->prepare('DELETE FROM blog WHERE blog.id = '.$blogID.' ');

    $deleteComments->execute();
    $deleteUserBlog->execute();
    $deleteBlog->execute();

    header('Location: ../../../../pages/blog/');

?>