<?php 
$pagename="Home Page";
include "includes/pages/general/head.php";

if(isset($_POST['register'])){
    $fname=$_POST["firstname"];
    $lname=$_POST["lastname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $occupation=$_POST["occupation"];
    $industry=$_POST["industry"];
    $password=$_POST["password"];
    $salt="@g26jQsG&nh*&#8v";
    $password=$password * $salt;
    $password==hash('sha256',$password);
    $date=date("Y-m-d h:i:s");
    
    if(mysqli_query($conn, $sql)){
        $sql3=mysqli_query($conn,"INSERT INTO users (first_name, last_name, email, phone, occupation, industry_id, password, date_created) VALUES ('$fname','$lname','$email','$phone','$occupation','$industry','$password','$date')");
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    
include "includes/pages/general/header.php";
    include "includes/pages/accessories/chat.php";
?>
<!-- //MainPage Begins -->
<?php include "includes/pages/home/hero.php"?>

<main id="main">
  <!-- ======= Clients Section ======= -->
  
</main>
 <!-- Modal -->
 <?php include "includes/pages/general/modals.php"?>

  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>