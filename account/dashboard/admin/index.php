<?php session_start(); ?>

<?php include '../../../components/header.php'; ?>
  
  <?php include '../../../components/navigation.php'; ?>
  <div class="background-container">
  <div class="py-20 px-3 md:lg:xl:px-40 border-t border-b adminbackground">
        <div class="dashboard grid grid-cols-2 md:lg:xl:grid-cols-2 group bg-white border ">
            <div onclick="window.location.href='pages/user.php'"
                class="dashboard-item d1 p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                    <i class="fa fa-user-o fa-4x icon-circle" aria-hidden="true"></i>
                <p class="text-xl font-medium text-slate-700 mt-3">Users</p>
                <p class="mt-2 text-sm text-slate-500">View, Delete and Update current users.</p>
            </div>

            <div onclick="window.location.href='pages/pendingComments.php'"
                class="dashboard-item d2 p-10 flex flex-col items-center text-center group md:lg:xl:border-l md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                    <i class="fa fa-pencil-square-o fa-4x icon-circle" aria-hidden="true"></i>
                <p class="text-xl font-medium text-slate-700 mt-3">Pending Reviews</p>
                <p class="mt-2 text-sm text-slate-500">Publish Reviews.</p>
            </div>

            <div onclick="window.location.href='pages/addBlog.php'" 
                class="dashboard-item d3 p-8 flex flex-col flex-row col-span-2 items-center text-center group  md:lg:xl:border-t hover:bg-slate-50 cursor-pointer">
                <span class="p-5 rounded-full bg-yellow-300 text-white shadow-lg shadow-slate-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg></span>
                <p class="text-xl font-medium text-slate-700 mt-3">Manage Programme</p>
                <p class="mt-2 text-sm text-slate-500">Update Show Information, Add Blog Articles</p>
            </div>
          </div>
    
    </div>
</div>
  <?php include '../../../components/footer.php'; ?>



