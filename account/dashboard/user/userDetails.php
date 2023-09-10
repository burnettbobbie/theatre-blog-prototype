<?php 
    session_start(); 
    include '../../auth/dbConfig.php';
    include '../../../components/header.php'; 
    include '../../../components/navigation.php'; 

    $userID = $_SESSION['id'];

    $users = $conn->prepare('SELECT 
        u.id,
        u.username,
        u.email,
        u.active,
        u.is_admin,
        u.firstname,
        u.lastname,
        u.address,
        u.city,
        u.post_code

       FROM users u

       where u.id = '. $userID .'
       
      ');
    $users->execute();
    $users->store_result();
    $users->bind_result($uID, $userName, $userEmail, $userActive, $userAdmin, $userFirst, $userLast, $userAddress, $userCity, $userPost );
    $users->fetch();

?>

<!-- User Details -->
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">My Details</h1>


<section>

<div class="w-full lg:w-8/12 px-4 mx-auto mt-6 ">
<button onclick="window.location.href='../user/';" class="m-6 mt-0 shadow-md bg-white shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium focus:bg-yellow-100" type="button">Back to Dashboard</button>
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-3xl bg-white border-0">
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form action="../admin/config/editUserConfig.php?userID=<?= $userID ?>" method="post">
        <h6 class="text-m mt-3 mb-6 font-medium uppercase">
          Update Information
        </h6>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Username
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $userName; ?>"
                name="username">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Email address
              </label>
              <input type="email" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $userEmail; ?>"
                name="email">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                First Name
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $userFirst; ?>"
                name="firstname">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Last Name
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $userLast; ?>"
                name="lastname">
            </div>
          </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <h6 class="text-m mt-3 mb-6 font-medium uppercase">
          Contact Information
        </h6>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Address
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $userAddress; ?>"
                name="address" >
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                City
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150" value="<?php echo $userCity; ?>"
                name="city">
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-s font-normal mb-2" htmlfor="grid-password">
                Postal Code
              </label>
              <input type="text" class="border px-3 py-3 bg-white rounded text-sm shadow w-full focus:ease-linear transition-all duration-150"value="<?php echo $userPost; ?>"
                name="post_code" >
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

<?php include '../../../components/footer.php'; ?>