<?php session_start(); ?>

<?php include '../../../components/header.php'; ?>
  
  <?php include '../../../components/navigation.php'; ?>
  <div class="background-container">
  <div class="py-20 px-3 md:lg:xl:px-40 adminbackground">
        <div class="dashboard grid grid-cols-2 md:lg:xl:grid-cols-2 group bg-white border ">
            <div onclick="window.location.href='../../../../theatre-project/account/dashboard/user/userDetails.php'"
                class="dashboard-item U1 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-r hover:bg-slate-50 cursor-pointer">
                    <i class="fa fa-user-o fa-4x icon-circle" aria-hidden="true"></i>
                <p class="text-xl font-medium text-slate-700 mt-3">
                    Personal Information
                </p>
                <p class="mt-2 text-sm text-slate-500">
                    Update user Information.
                </p>
            </div>

            <div onclick="window.location.href='../../../../theatre-project/account/dashboard/user/userComments.php'"
                class="dashboard-item U2 p-10 flex flex-col items-center text-center group md:lg:xl:border-l md:lg:xl:border-l hover:bg-slate-50 cursor-pointer">
                    <i class="fa fa-pencil-square-o fa-4x icon-circle" aria-hidden="true"></i>
                <p class="text-xl font-medium text-slate-700 mt-3">My Reviews</p>
                <p class="mt-2 text-sm text-slate-500">See review history.</p>
            </div>
          </div>
    
    </div>
</div>
  <?php include '../../../components/footer.php'; ?>

