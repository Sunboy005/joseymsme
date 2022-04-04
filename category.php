<?php 
ob_start();
session_start();
include "includes/connections/connect.php";
if(isset($_GET['id'])){
$categoryId=$_GET['id'];
$query="SELECT * FROM category WHERE category_id='$categoryId'";
$runQuery=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($runQuery);
$categoryname=$result['name'];
$categoryDescription=$result['description'];
$pagename=$categoryname;
$pagen='category?id='.$categoryId;
}

include "includes/pages/general/head.php";
include "includes/pages/general/header.php";
include "includes/pages/accessories/chat.php";
?>

<div class="container" style="padding-top:100px">
    <div class="col-sm-12">         
            <div class="row">
            <div class="col-sm-12 ">
                <h1 class="font-weight-800 mb-2 breadcrumb text-center text-lg-center pt-lg-3">
                    <?php echo $categoryname?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <?php include "includes/pages/categories.php";?>
            </div>
            <div class="col-lg-4">
                <?php include "includes/pages/general/resources_sidepost.php";?>
            </div>
        </div>
    </div>
</div>
<hr>
  <!-- Modal -->
  <?php include "includes/pages/general/modals.php"?>
 
   <!-- ======= Footer ======= -->
 
 <?php 
     include "includes/pages/general/footer.php";
 ?>
