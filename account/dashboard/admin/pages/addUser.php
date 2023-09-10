
<?php 
    session_start();
    include '../../../../components/header.php';
    include '../../../../components/navigation.php'; 
?>
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">Add Admin</h1>  


<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 p-6 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-2">
    <!-- Form to add new admin user -->
    <!-- Post to users table -->
      <form action="../config/addUser.php" method="post">
        <div class="flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="firstname">
                First Name
              </label>
              <input 
                type="text" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="first name"
                name="firstname"
              >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="lastname">
                  Surname            
              </label>
              <input 
                type="text" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="surname"
                name="lastname"
              >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="username">
                Username
              </label>
              <input 
                type="text" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="username"
                name="username"
                >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="password">
                  password             
              </label>
              <input 
                type="text" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="password"
                name="password"
              >
            </div>
          </div>

          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase font-normal text-s mb-2" htmlfor="email">
                  email            
              </label>
              <input 
                type="email" 
                class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" 
                placeholder="email"
                name="email"
              >
            </div>
          </div>

        </div>
        <button type="submit" class="bg-white m-6 mt-2 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium active:shadow-inner shadow-black">
            ADD 
        </button>
        <hr class="mt-6 border-b-1 border-blueGray-300">
      </form>
    

    <button onclick="window.location.href='../';" class="bg-white m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">Back to Dashboard</button>

  </div>
</div>

</section>
<?php include '../../../../components/footer.php'; ?>
