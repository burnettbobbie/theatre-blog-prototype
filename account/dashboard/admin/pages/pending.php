<?php 
    session_start();
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php';
    include '../../../../components/navigation.php';

    $blogID = $_GET['blog_id'];
    // $userID = $_GET['user_id'];
    $userID = $_SESSION['id'];

    $blogDetails = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.blog_content,
    b.created_on

   FROM userblog ub
   LEFT JOIN blog b ON ub.fk_blog_id = b.id
   where b.id= '. $blogID .'
   
  ');
$blogDetails->execute();
$blogDetails->store_result();
$blogDetails->bind_result($blogID, $blogTitle, $blogContent, $blogCreated);
$blogDetails->fetch();
// only pending comments will show
$pendingComment = $conn->prepare('SELECT 
c.id,
c.comment,
c.heading,
-- c.fk_userblog
u.username,
b.id,
b.title,
b.blog_content,
b.img_path,
b.show_name

FROM comments c 

LEFT JOIN userblog ub on c.fk_userblog = ub.id 
LEFT JOIN users u on ub.fk_user_id = u.id 
LEFT JOIN blog b on ub.fk_blog_id = b.id 

WHERE pending = 1 and b.id = '.$blogID.'

');
$pendingComment->execute();
$pendingComment->store_result();
$pendingComment->bind_result($commentID, $commentDetails, $commentHeading, $username, $bID, $blogTitle, $blogContent, $blogImg, $showName, );

?>
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">Pending Comments</h1>


<section class="dark:bg-gray-900">
    <div class="flex justify-center blog-mob mt-3">
        <div class="flex items-center w-full max-w-3xl mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                <?= $blogTitle ?>
                </h1>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Added on: <?= $blogCreated ?> by <?= $username ?></p>
                <hr>
                <div class="mt-6">
                    <pre class="mt-4 text-gray-500 dark:text-gray-400">
                        <?= $blogContent ?>
                    </pre>    
                </div>   
                <button onclick="window.location.href='editBlog.php?bid=<?= $blogID ?>';"
                type="submit" 
                class="bg-white mt-6 shadow-md shadow-slate-700 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium">
                    edit blog
                </button>   
            </div>
        </div>
    </div>
</section>

<!-- Comments component -->
<div class="p-8">
    <div class="p-4 rounded-lg py-8">
        <div class="">
            <div class="mt-4 m-1 flex items-center direction-col">
            <?php while ($pendingComment->fetch()): ?>
                <div class="border bg-slate-50 m-2 border-black rounded-lg w-6/12 flex items-center flex-col text-center align-center">
                    <div class="flex items-center h-16">
                        <span class="text-lg font-bold"><?= $commentHeading ?></span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500"><?= $commentDetails ?></span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Added By: <?= $username ?> </span>
                    </div>
                    <button 
                    onclick="window.location.href='../config/publishComment.php?cid=<?= $commentID ?>';"
                    class="bg-white m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium">
                        Publish
                    </button>
                </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>
</div>

<?php 
    include '../../../../components/footer.php';
?>