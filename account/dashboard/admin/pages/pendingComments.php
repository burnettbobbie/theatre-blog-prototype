<?php 
    session_start();
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php';
    include '../../../../components/navigation.php'; 

    $pendingComment = $conn->prepare('SELECT 
    c.id,
    c.comment,
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

    WHERE pending = 1
   
  ');
$pendingComment->execute();
$pendingComment->store_result();
$pendingComment->bind_result($commentID, $commentDetails, $username, $bID, $blogTitle, $blogContent, $blogImg, $showName);

?>
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">Articles: Pending Comments</h1>

<section class="py-10 bg-gradient-to-t from-gray-300 to-white flex justify-center align-center">
    <button onclick="window.location.href='../';" class="m-6 mt-0 bg-white shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">Back to Dashboard</button>

    <?php if ($pendingComment->num_rows == 0): ?>
        <h3 class="text-center">There are no comments pending</h3>
    <?php else: ?>
        <div class="mx-auto grid max-w-6xl grid-cols-1 grid-rows-2 gap-6 p-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
        <?php while ($pendingComment->fetch()): ?>
       
                <div class="flex justify-center bg-white rounded-lg">
                    <div class="blog-card flex flex-col rounded-xl md:max-w-xl md:flex-row">
                        <img src="<?= ROOT_DIR ?>assets/images/<?= $blogImg ?>" class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"alt="<?= $showName ?>" />
                        <div class="flex flex-col justify-start p-6">
                        <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                            <?= $blogTitle ?>
                        </h5>
                        <p class="blog-content mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            <?= $blogContent ?>
                        </p>
                        <button onclick="window.location.href='pending.php?blog_id=<?= $bID ?>';" type="button" class="border border-black blog-button ">
                            View Pending Comments...
                        </button>    
                        </div>
                    </div>
                </div>
        <?php endwhile ?>        
        </div>
    <?php endif ?>  
     

    
</section>



<?php 
  
    include '../../../../components/footer.php'; 
?>