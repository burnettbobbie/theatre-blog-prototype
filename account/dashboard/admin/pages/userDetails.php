<?php 
    session_start(); 
    include '../../../auth/dbConfig.php';
    include '../../../../components/header.php'; 
    include '../../../../components/navigation.php'; 

    $userID = $_GET['uid'];

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

    // total comments for the selected user
    $commentCount = $conn->prepare('SELECT 
        
    COUNT(fk_user_id)
    FROM userblog
    WHERE fk_user_id ='. $userID .'
    ');
    $commentCount->execute();
    $commentCount->store_result();
    $commentCount->bind_result($commentsTotal);
    $commentCount->fetch();

?>

<!-- User Details -->
<h1 class="text-3xl py-10 font-medium justify-center text-center bg-black text-white capitalize lg:text-3xl dark:text-white">User Details</h1>

<section class="py-10">
<button onclick="window.location.href='../';" class="m-6 mt-0 shadow-md bg-white shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">Back to Dashboard</button>

    <div class="flex justify-center">
        <div class="flex flex-col justify-start p-16 bg-white border border-black rounded-lg shadow-lg shadow-black">
            <table>
            <tbody>
            <tr>
            <td class="text-left">Username:</td>
            <td class="text-center p-2">
            <?= $userName ?>
            </td>
            </tr>
            <tr>
            <td class="text-left">Firstname:</td>
            <td class="text-center p-2">
            <?= $userFirst ?>
            </td>
            </tr>
            <tr>
            <td class="text-left">Lastname:</td>
            <td class="text-center p-2">
            <?= $userLast ?>
            </td>
            </tr>
            <tr>
            <td class="text-left">Address:</td>
            <td class="text-center p-2">
            <?= $userAddress ?>
            </td>
            </tr>
            <tr>
            <td class="text-left">City:</td>
            <td class="text-center p-2">
            <?= $userCity ?>
            </td>
            </tr>
            <tr>
            <td class="text-left">Post Code:</td>
            <td class="text-center p-2">
            <?= $userPost ?>
            </td>
            </tr>
            </tbody>
            </table>
    </div>
    <button onclick="window.location.href='userComments.php?uid=<?= $userID ?>';" class="shadow-md shadow-slate-700 p-10 rounded-lg px-6 py-5 border border-black text-black duration-100 hover:bg-yellow-200 hover:shadow-none text-medium" type="button">
          User comments (<?=$commentsTotal ?>)
    </button>

</section>

<?php include '../../../../components/footer.php'; ?>