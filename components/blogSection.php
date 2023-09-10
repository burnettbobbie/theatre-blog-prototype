<?php 

    $blog = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.blog_content,
    b.created_on,
    b.img_path,
    b.show_name

   FROM blog b  
   ORDER BY b.created_on DESC
   LIMIT 6
   ') ;

$blog->execute();
$blog->store_result();
$blog->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath, $showName);
echo $blogID;
?>
<!-- Blog List -->
<section class="py-10 bg-gradient-to-t from-gray-300 to-white">
  <div class="container m-0 py-10 mx-auto w-full">
    <h1 class="text-3xl py-10 font-medium justify-center drop-shadow-2xl shadow-zinc-900 text-center border-black border-2 m-2 bg-black rounded-t-3xl text-white capitalize lg:text-3xl dark:text-white">Latest show reviews and comments</h1>
  </div>
  <div class="mx-auto grid max-w-6xl grid-cols-1 grid-rows-2 gap-6 p-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
    
  <?php while ($blog->fetch()): ?>
    <div class="flex justify-center bg-white rounded-lg">
      <div class="blog-card flex flex-col rounded-lg md:max-w-xl md:flex-row">
          <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="<?= ROOT_DIR ?>assets/images/<?= $imgPath ?>" alt="<?= $showName ?>" />
        <div class="flex flex-col justify-start p-6">
          <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
            <?= $blogTitle ?>
          </h5>
          <p class="blog-content mb-4 text-base text-neutral-600 dark:text-neutral-200">
          <?= $blogContent ?>
          </p>
          <p class="text-xs text-neutral-500 dark:text-neutral-300">
            Created <?=$blogCreated?>
          </p>
          <button onclick="window.location.href='pages/blog/details.php?blog_id=<?= $blogID ?>';"type="button" class="border border-black blog-button ">
            See More...
          </button>    
        </div>
      </div>
    </div>
  <?php endwhile ?>
  
</section>
