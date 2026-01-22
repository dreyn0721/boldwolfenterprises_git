<?php 
// Vars
$page = "dashboard";
$pagetitle = "Dashboard | Bold Wolf Enterprises";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non euismod dolor. Integer sapien ipsum, dapibus eget bibendum sed nullam sodales.";

include("template-parts/header-admin.php");

if( !logged_in() ){
  header("Location: admin.php");
}
?>





<?php include("template-parts/footer.php"); ?>

