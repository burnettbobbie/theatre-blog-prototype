<?php 
    session_start(); 
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php'; 
    include '../../../../components/navigation.php'; 

    $users = $conn->prepare('SELECT 
        u.id,
        u.username,
        u.email,
        u.active,
        u.is_admin

       FROM users u

       where u.is_admin = 0
       
      ');
$users->execute();
$users->store_result();
$users->bind_result($userID, $userName, $userEmail, $userActive, $userAdmin);

?>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

<!--table of users  -->
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">All Users</h1>  

  <div class="container w-full md:w-4/5 mb-4 mt-4 mx-auto px-2">    
		<!--Users Table-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
    <button onclick="window.location.href='./addUser.php';" class="shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium focus:bg-yellow-100" type="button">ADD ADMIN USER</button>
			<table id="users" class="hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">VIEW DETAILS</th>
						<th data-priority="2">USERNAME</th>
						<th data-priority="3">EMAIL</th>
						<th data-priority="4">STATUS</th>
						<th data-priority="6">MANAGE</th>
					</tr>
				</thead>
				<tbody>
          <?php while ($users->fetch()): ?>
					<tr>
						<td>
            <a href="userDetails.php?uid=<?= $userID ?>">
            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 768.2 768.2" xml:space="preserve"> 
              <path d="M384.15,400c-110.3,0-200-89.7-200-200c0-110.3,89.7-200,200.1-200c110.301,0,200,89.7,200,200 C584.15,310.3,494.45,400,384.15,400z M384.15,19.8c-99.4,0-180.3,80.8-180.3,180.2c0,99.4,80.9,180.3,180.3,180.3 c99.4,0,180.2-80.9,180.2-180.3C564.35,100.6,483.55,19.8,384.15,19.8z"></path> 
              <path d="M746.85,768.2H21.95L21.35,646.6c0-42.3,13.9-82,40.2-114.899c25.5-31.9,61.3-54.7,100.8-64.301l1.1-0.3h1.2l440.5-1.2 l1.3,0.4c38.5,10.5,73.8,34,99.4,66.1C732.25,565.5,746.75,606,746.75,646.5L746.85,768.2L746.85,768.2z M41.65,748.5h685.4 V646.6c0-36.1-13-72.2-36.601-101.8c-22.8-28.5-53.899-49.5-87.899-59.1l-436.601,1.199c-34.8,8.7-66.4,28.9-88.9,57.101 c-23.5,29.399-35.9,64.8-35.9,102.5L41.65,748.5z"></path> 
            </svg> 
            </a>
            </td>
						<td class=""><?= $userName ?></td>
						<td class="text-left"><?= $userEmail ?></td>
						<td class="text-left">
              <?php if ($userActive == 1): ?>
              <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                Active
              </span>
              <?php else: ?>  

              <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                Inactive
              </span>
              <?php endif ?>
  					<td>
              <div class="flex justify-end gap-4 text-left">
              <a class="delete-id" href="#" >
                <button  x-data="{ tooltip: 'Delete' }" class="delete-btn" onclick="window.location.href='../config/deleteUser.php?uid=<?= $userID ?>'">
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
                </button> 
                <?php if ($userActive == 1): ?>
                <button onclick="window.location.href='../config/deactivateUser.php?uid=<?= $userID ?>';">
                <input type="checkbox" class='relative h-5 w-10 appearance-none rounded-[20px] bg-[#e0e5f2] outline-none transition duration-[0.5s] 
                  before:absolute before:top-[50%] before:h-4 before:w-4 before:translate-x-[20px] before:translate-y-[-50%] before:rounded-[20px]
                  before:bg-white before:shadow-[0_2px_5px_rgba(0,_0,_0,_.2)] before:transition before:content-[""]
                  checked:before:translate-x-[22px] hover:cursor-pointer checked:bg-yellow-500 dark:checked:bg-yellow-400'id="checkbox4" />
                </button>
                <?php elseif ($userActive == 0): ?>
                <button onclick="window.location.href='../config/activateUser.php?uid=<?= $userID ?>';">
                <input type="checkbox" class='relative h-5 w-10 appearance-none rounded-[20px] bg-[#e0e5f2] outline-none transition duration-[0.5s] 
                  before:absolute before:top-[50%] before:h-4 before:w-4 before:translate-x-[2px] before:translate-y-[-50%] before:rounded-[20px]
                  before:bg-white before:shadow-[0_2px_5px_rgba(0,_0,_0,_.2)] before:transition before:content-[""]
                  checked:before:translate-x-[22px] hover:cursor-pointer checked:bg-brand-500 dark:checked:bg-brand-400'id="checkbox4" />
                </button>
                <?php endif ?>
              </div>
            </td>
					</tr>
          <?php endwhile ?>
				</tbody>
			</table>
    <button onclick="window.location.href='../';" class="focus:bg-yellow-100 m-6 mt-0 shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">Back to Dashboard</button>
		</div>
	</div>




	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#users').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
       
		});
	</script>



  <?php include '../../../../components/footer.php'; ?>