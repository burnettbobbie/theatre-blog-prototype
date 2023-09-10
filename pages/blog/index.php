<?php 
    session_start();
    include '../../account/auth/dbConfig.php';
    include '../../components/header.php';
    include '../../components/navigation.php';
    

  $blog = $conn->prepare('SELECT 
	
    b.id,
    b.title,
    b.blog_content,
    b.created_on,
    b.img_path,
    b.show_name,
    b.is_published

   FROM blog b');

$blog->execute();
$blog->store_result();
$blog->bind_result($blogID, $blogTitle, $blogContent, $blogCreated, $imgPath, $showName, $isPublished);



$blogPub = $conn->prepare('SELECT 
	
  b.id,
  b.title,
  b.blog_content,
  b.created_on,
  b.img_path,
  b.show_name,
  b.is_published

FROM blog b
where b.is_published = 1');

$blogPub->execute();
$blogPub->store_result();
$blogPub->bind_result($bid, $blogT, $blogC, $blogCr, $imgP, $showN, $isPub);
echo $blogID;
?>


    <!-- only show if admin -->
    <h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">Articles · reviews · blog</h1>
    <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 1): ?>
      <div class="mt-3 flex items-end justify-center">
          <button onclick="window.location.href='../../account/dashboard/admin/pages/addBlog.php';" class="shadow-md shadow-slate-700 mt-4 flex items-center p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium">ADD BLOG ARTICLE</button>
      </div>
    <?php endif ?>

  <section class="p-8 mx-auto grid max-w-6xl grid-cols-1 grid-rows-1 gap-3 p-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:max-w-full">
    
    <?php while ($blog->fetch()): ?>
      <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 1): ?>
      <div class="flex justify-center bg-white rounded-lg">
        <div class="blog-card flex flex-col rounded-lg bg-whitedark:bg-neutral-700 md:max-w-xl md:flex-row">
          <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="<?= ROOT_DIR ?>assets/images/<?= $imgPath ?>" alt="<?= $showName ?>" />
          <div class="flex flex-col justify-start p-6">
            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
              <?= $blogTitle ?>
            </h5>
            <p class="blog-content mb-4 text-base text-neutral-600 dark:text-neutral-200 py-full">
            <?= $blogContent ?>
            </p>
            <p class="text-xs text-neutral-500 dark:text-neutral-300">
              Created <?=$blogCreated?>
            </p>
            <button onclick="window.location.href='details.php?blog_id=<?= $blogID ?>';"type="button" class="border border-black blog-button ">
            See More...
          </button>   
            <div class="flex flex-row">
          <button>
            <a x-data="{ tooltip: 'Edite' }" href='../../account/dashboard/admin/pages/editBlog.php?bid=<?= $blogID ?>';>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                />
              </svg>
            </a>
          </button>
            <a class="delete-id" href="#" >
                <button  x-data="{ tooltip: 'Delete' }" class="delete-btn" onclick="window.location.href='../../account/dashboard/admin/config/deleteBlog.php?bid=<?= $blogID ?>'">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                    x-tooltip="tooltip"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                    />
                  </svg>
                </button>
              </a>
              <?php if ($isPublished == 1): ?>
              <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                Published
              </span>
              <?php else: ?>  

              <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                Unpublished
              </span>
              <?php endif ?>
              <?php if ($isPublished == 1): ?>
                <button onclick="window.location.href='../../account/dashboard/admin/config/deactivateBlog.php?bid=<?= $blogID ?>';">
                <input type="checkbox" class='relative h-5 w-10 appearance-none rounded-[20px] bg-[#e0e5f2] outline-none transition duration-[0.5s] 
                  before:absolute before:top-[50%] before:h-4 before:w-4 before:translate-x-[20px] before:translate-y-[-50%] before:rounded-[20px]
                  before:bg-white before:shadow-[0_2px_5px_rgba(0,_0,_0,_.2)] before:transition before:content-[""]
                  checked:before:translate-x-[22px] hover:cursor-pointer checked:bg-yellow-500 dark:checked:bg-yellow-400'id="checkbox4" />
                </button>
                <?php elseif ($isPublished == 0): ?>
                <button onclick="window.location.href='../../account/dashboard/admin/config/activateBlog.php?bid=<?= $blogID ?>';">
                <input type="checkbox" class='relative h-5 w-10 appearance-none rounded-[20px] bg-[#e0e5f2] outline-none transition duration-[0.5s] 
                  before:absolute before:top-[50%] before:h-4 before:w-4 before:translate-x-[2px] before:translate-y-[-50%] before:rounded-[20px]
                  before:bg-white before:shadow-[0_2px_5px_rgba(0,_0,_0,_.2)] before:transition before:content-[""]
                  checked:before:translate-x-[22px] hover:cursor-pointer checked:bg-brand-500 dark:checked:bg-brand-400'id="checkbox4" />
                </button>
                <?php endif ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif?>
      <?php endwhile?>
      <?php while ($blogPub->fetch()): ?>
      <?php if (isset ($_SESSION['is_admin']) == 0): ?>
      <div class="flex justify-center bg-white rounded-lg">
        <div class="blog-card flex flex-col rounded-lg bg-whitedark:bg-neutral-700 md:max-w-xl md:flex-row">
          <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="<?= ROOT_DIR ?>assets/images/<?= $imgP ?>" alt="<?= $showN ?>" />
          <div class="flex flex-col justify-start p-6">
            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
              <?= $blogT ?>
            </h5>
            <p class="blog-content mb-4 text-base text-neutral-600 dark:text-neutral-200 py-full">
            <?= $blogC ?>
            </p>
            <p class="text-xs text-neutral-500 dark:text-neutral-300">
              Created <?=$blogCr?>
            </p>
            <button onclick="window.location.href='details.php?blog_id=<?= $bid ?>';"type="button" class="border border-black blog-button ">
            See More...
            </button>           
            </div>
          </div>
        </div>
      </div>
      <?php endif?>

      <?php if (isset($_SESSION['loggedin']) == TRUE && ($_SESSION['is_admin']) == 0): ?>
      <div class="flex justify-center bg-white rounded-lg">
        <div class="blog-card flex flex-col rounded-lg bg-whitedark:bg-neutral-700 md:max-w-xl md:flex-row">
          <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="<?= ROOT_DIR ?>assets/images/<?= $imgP ?>" alt="<?= $showN ?>" />
          <div class="flex flex-col justify-start p-6">
            <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
              <?= $blogT ?>
            </h5>
            <p class="blog-content mb-4 text-base text-neutral-600 dark:text-neutral-200 py-full">
            <?= $blogC ?>
            </p>
            <p class="text-xs text-neutral-500 dark:text-neutral-300">
              Created <?=$blogCr?>
            </p>
            <button onclick="window.location.href='details.php?blog_id=<?= $bid ?>';"type="button" class="border border-black blog-button ">
            See More...
          </button>           
            </div>
          </div>
        </div>
      </div>
      <?php endif?>
    <?php endwhile?>


  </section>

   

    

<?php include '../../components/footer.php';?>