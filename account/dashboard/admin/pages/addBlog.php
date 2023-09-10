<?php 
    session_start();
    include '../../../../components/header.php';
    include '../../../../components/navigation.php'; 
    // echo $_SESSION['id'];
?>
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">Add Show Information/ Article</h1>  

<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <!-- View All Articles -->
<button onclick="window.location.href='../../../../pages/blog';" class="bg-white m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-2 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">Manage Blogs</button>

  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <!-- Add article form -->
      <!-- Post to add blog config -->
    <form action="../config/addBlogConfig.php" method="post">
        <h6 class="text-m mt-3 mb-6 font-medium uppercase">
          Show Information and Blog Article
        </h6>
        <div class="flex flex-wrap">
        <div class="w-full px-4">
            <div class="align-center justify-center w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Show Name
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                name="show_name">
            </div>
           </div>
  
          <div class="w-full h-full px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Description
              </label>
              <textarea type="text" class="border px-3 py-3 h-full bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"
                name="description"></textarea>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Start Date
              </label>
              <input type="date" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                name="start_date">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                End Date
              </label>
              <input type="date" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"
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
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
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
                name="blog_content" ></textarea>
            </div>
          </div>
          <div class="w-full flex flex-row px-4">
            <div class="w-full px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Image
              </label>
                <input 
                type="file" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="upload file"
                name="img_path"
              >
            </div>
          </div>
          </div>
      
        </div>
        <button type="submit" class="bg-white m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium">
            ADD ARTICLE
        </button>
        <hr class="mt-6 border-b-1 border-blueGray-300">


      </form>
     
    </div>
  <!-- Back to admin Dashboard -->
    <button onclick="window.location.href='../';" class="bg-white m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">Dashboard</button>

  </div>
</div>

</section>
<?php include '../../../../components/footer.php'; ?>

