<?php
session_start();
$pagename="Home Page";
include "includes/pages/general/head.php";
if(isset($_POST['register'])){    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $occupation=$_POST["occupation"];
    $industry=$_POST["industry"];
    $password=$_POST["password"];
    $designation=2;
    $salt = 'shfdyewencnhcsdsewe'.$password;
    $hashed_password = md5($salt);            
    $date=date("Y-m-d h:i:s");
    
    //Insert into the database
    $set_fk_checkr=mysqli_query($conn,"SET FOREIGN_KEY_CHECKS=0;");
    $sql="INSERT INTO users (first_name, last_name, email, phone, occupation, industry_id, password, date_created) VALUES ('$fname','$lname','$email','$phone','$occupation','$industry','$hashed_password','$date')";
    if (!mysqli_query($conn,$sql) && !$set_fk_check)
  {
    $_SESSION['msgtype']="alert-danger";
	$_SESSION['msg']="User registration failed";
  die('Error: ' . mysqli_error($conn));
  }
  
  $_SESSION['msgtype']="alert-success";
  $_SESSION['msg']="User registered successfully";
  header("location: index.php");
}

//check if form is submitted

if (isset($_POST['login'])) {
      
    $username = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $salt = 'shfdyewencnhcsdsewe'.$password;
    $hashed_password = md5($salt);                     
    echo $hashed_password;
    $query = "SELECT * FROM users WHERE email = '$username' AND password = '$hashed_password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user'] = $row['email'];
        echo '<script> window.location = "admin/dashboard" </script>';
        header("location:userhome.php");
    }else {
        $_SESSION['msgtype']="alert-danger";
        $_SESSION['msg']="username or password is incorrect";
    }                                 
}
include "includes/pages/general/header.php";
include "includes/pages/accessories/chat.php";
?>
<!-- //MainPage Begins -->
<?php include "includes/pages/home/hero.php"?>

<main id="main">
 <!-- ======= Clients Section ======= -->
  <?php include "includes/pages/home/homemain.php"?>
 
</main>
 <!-- Modal -->
 <?php include "includes/pages/general/modals.php"?>

  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>