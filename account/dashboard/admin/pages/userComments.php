<?php 
    session_start();
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php';
    include '../../../../components/navigation.php'; 

    $userID = $_GET['uid'];

// comments
$comments = $conn->prepare('SELECT 
	
    c.id,
    c.heading,
    c.comment,
    c.date_added,
    c.pending,
    u.username,
    b.title

FROM comments c

LEFT JOIN userblog ub ON c.fk_userblog = ub.id
LEFT JOIN blog b ON ub.fk_blog_id = b.id
LEFT JOIN users u ON ub.fk_user_id = u.id

where ub.fk_user_id= '. $userID .' AND c.pending = 0
ORDER BY c.date_added DESC

');
$comments->execute();
$comments->store_result();
$comments->bind_result($cID, $cHeading, $comment, $cDateAdded, $pending, $username, $bTitle);

// total comments for the selected user
$commentCount = $conn->prepare('SELECT 
	
COUNT(fk_user_id)
FROM userblog
WHERE fk_user_id ='. $userID .'
');
$commentCount->execute();
$commentCount->store_result();
$commentCount->bind_result($commentsTotal);
$commentCount->fetch();

?>
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">My Activity</h1>  

    <div class="comments-title p-4 rounded-lg shadow-xl py-8 mt-12">
    <button onclick="window.location.href='userDetails.php?uid=<?= $userID?>';" class="float-right m-6 mt-0 shadow-md bg-white shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium focus:bg-yellow-100" type="button">Back to User</button>

        <h4 class="text-2xl font-bold text-gray-800 tracking-widest uppercase text-center">Comments (<?=$commentsTotal ?>)</h4>
        <div class="justify-center text-center ">
            <?php if($comments->num_rows > 0): ?>
                <?php while ($comments->fetch()): ?>
                <div class="border-l blog-comment mb-0 pb-0 border-neutral-300 dark:border-neutral-500"> 
                        <div class=" flex-start flex items-center pt-3">
                            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500">
                            </div> 
                            <div class="flex mt-2 items-center font-medium mr-2">
                            <h3><?=$bTitle?></h3>
                        </div>       
                            <p class="date-added text-sm text-neutral-500 dark:text-neutral-300"> On: <?= $cDateAdded ?> </p>
                        </div>
                        <div class="mt-1 ml-4">
                            <div class="flex items-center mb-1">
                                <span class="comment-heading text-lg text-black font-medium"><?= $cHeading ?></span>
                            </div>
                            <div class="comment-text flex items-center text-left  ">
                                <span class="text-gray-500"><?= $comment ?></span>
                            </div> 
                        </div>
                </div>
                <?php endwhile ?>            
            <?php else: ?>
                <p class="mb-4 text-sm text-gray-700">There are no published comments from this user yet</p>
            <?php endif ?>           
        </div>

        </div>      
    
<?php include '../../../../components/footer.php'; ?>