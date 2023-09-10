<?php 

    $blog = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.description,
    b.start_date,
    b.end_date,
    b.blog_content,
    b.created_on,
    b.img_path,
    b.show_name

   FROM blog b  
   ORDER BY b.start_date DESC
   ');

$blog->execute();
$blog->store_result();
$blog->bind_result($blogID, $blogTitle, $blogDescription, $startDate, $endDate, $blogContent, $blogCreated, $imgPath, $showName);
echo $blogID;
?>

<section class="bg-white dark:bg-gray-900">
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">What's On</h1>
    <div class="container px-6 py-10 mx-auto">
        

        <?php while ($blog->fetch()): ?>

        <div class="flex justify-center m-4">
            <div class="blog-card flex flex-col rounded-lg  bg-whitedark:bg-neutral-700 md:max-w-l md:flex-row">
                <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="<?= ROOT_DIR ?>assets/images/<?= $imgPath ?>" alt="<?= $showName ?>" />
                <div class="flex flex-col justify-start p-6">
                    <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                        <?= $showName ?>
                    </h5>
                    <p class="blog-content mb-4 text-base text-s text-neutral-600 dark:text-neutral-200">
                        <?= $blogDescription ?>
                    </p>
                    <p class="text-s text-neutral-500 dark:text-neutral-300">
                        Showing from <?=$startDate?> Until <?=$endDate?>
                    </p>
                    <button onclick="window.location.href='blog/details.php?blog_id=<?= $blogID ?>';"type="button" class="blog-button ">
                        See Blog
                    </button>    
                </div>
            </div>
        </div>
        
        <?php endwhile ?>

</section>