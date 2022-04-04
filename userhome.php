<?php
session_start();

include('includes/processing/checklogin.php');	
include('includes/processing/userInfo.php');	
$pagename="Home Page";
include "includes/pages/general/head.php";
include "includes/pages/general/header.php";
    include "includes/pages/accessories/chat.php";
?>
<!-- //MainPage Begins -->
<?php include "includes/pages/home/hero.php"?>

<main id="main">
  <!-- ======= Clients Section ======= -->
    <?php
    print_r($_SESSION['user']);
    ?>
</main>
 <!-- Modal -->
 <?php include "includes/pages/general/modals.php"?>

  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>