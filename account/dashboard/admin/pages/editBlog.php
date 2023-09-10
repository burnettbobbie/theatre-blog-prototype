<?php 
    session_start(); 
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php'; 
    include '../../../../components/navigation.php'; 
  
    //get blog id
    $blogID = $_GET['bid'];

    //prepare SQL statement for blog/article by blog id (theatre articles are stored as blogs in the database)
    $blog = $conn->prepare('SELECT 
	
        b.id,
        b.title,
        b.description,
        b.start_date,
        b.end_date,
        b.blog_content,
        b.created_on,
        b.img_path,
        b.show_name,
        b.is_published

       FROM blog b

       where b.id = '. $blogID .'
       
      ');
      $blog->execute();
      $blog->store_result();
      $blog->bind_result($blogID, $blogTitle, $blogDesc, $blogStart, $blogEnd, $blogContent, $blogCreated, $imgPath, $showName, $isPublished);
      $blog->fetch();

?>

<!-- Blog Details -->
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">Update Blog</h1>
<div><? $blogContent?></div>

<section>

<div class="w-full lg:w-8/12 px-4 mx-auto mt-6 ">
  <!-- Back to all articles -->
<button onclick="window.location.href='../../../../pages/blog/';" class="m-6 mt-0 shadow-md bg-white shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium focus:bg-yellow-100" type="button">Back to Blogs</button>
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-3xl bg-white border-0">
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <!-- Form to update article -->
      <!-- Post to update blog by id -->
      <form action="../config/editBlogConfig.php?bid=<?= $blogID ?>" method="post">
        <h6 class="text-m mt-3 mb-6 font-medium uppercase">
          Update Show Information and article
        </h6>
        <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div class="align-center justify-center w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Show Name
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $showName; ?>"
                name="show_name">
            </div>
           </div>
  
          <div class="w-full h-full px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Description
              </label>
              <textarea type="text" class="border px-3 py-3 h-full bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"
                name="description"><?php echo $blogDesc; ?></textarea>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Start Date
              </label>
              <input type="date" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $blogStart; ?>"
                name="start_date">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                End Date
              </label>
              <input type="date" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $blogEnd; ?>"
                name="end_date">
            </div>
          </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">
        <h6 class="text-m mt-3 mb-6 font-medium uppercase">
          Article
        </h6>
        <div class="w-full px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Title
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $blogTitle; ?>"
                name="title">
            </div>
           </div>

        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Content
              </label>
              <textarea type="text" class="border px-3 h-56 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"
                name="blog_content" ><?php echo $blogContent; ?></textarea>
            </div>
          </div>
          <div class="w-full flex flex-row px-4">
            <div class="w-full px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Image
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"value="<?php echo $imgPath; ?>"
                name="img_path" >
                <input 
                type="file" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="Eg: Wizard of Oz"
                name="img_path"
              >
            </div>
          </div>
          </div>
      
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">
        <button type="submit" class="bg-white m-6 mt-2 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium active:bg-yellow-100">
            Update 
          </button>

      </form>
    </div>
  </div>
</div>
</section>

<?php include '../../../../components/footer.php'; ?>