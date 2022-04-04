<?php
session_start();
include('includes/processing/checklogin.php');	
include('includes/processing/resourceinfo.php');	
$pagename="Home Page";
include "includes/pages/general/head.php";
    
include "includes/pages/general/header.php";
include "includes/pages/accessories/chat.php";
?>

<main id="main">
  <!-- ======= Clients Section ======= -->
  <?php include "includes/pages/resourcesmain.php"?>
  
</main>
 <!-- Modal -->
 <?php include "includes/pages/general/modals.php"?>

  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>