<?php 
    session_start();
    include '../account/auth/dbConfig.php';
    include '../components/header.php';
    include '../components/navigation.php';
?>

<?php include '../components/upcomingShows.php'; ?>
<?php
    include '../components/footer.php';
?>