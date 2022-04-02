
<?php 
$pagename="Home Page";
include "includes/pages/general/head.php";
include "includes/connections/connect.php";
include "includes/pages/general/header.php";
    include "includes/pages/accessories/chat.php";
?>
<!-- //MainPage Begins -->
<?php include "includes/pages/home/hero.php"?>

<main id="main">
  <!-- ======= Clients Section ======= -->
  
</main>
 <!-- Modal -->
 <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>