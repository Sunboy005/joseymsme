<?php
session_start();
include('includes/processing/checklogin.php');	
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
    $designation=1;
    $hashed_password=password_hash($password, PASSWORD_DEFAULT);
    $date=date("Y-m-d h:i:s");
    
    //Insert into the database
    $sql="INSERT INTO users (first_name, last_name, email, phone, occupation, industry_id, password, date_created) VALUES ('$fname','$lname','$email','$phone','$occupation','$industry','$hashed_password','$date')";
    if (!mysqli_query($conn,$sql))
  {
    $_SESSION['msgtype']="alert-danger";
		$_SESSION['msg']="User registration failed";
        echo "<script>alert('User registration failed');</script>";
  die('Error: ' . mysqli_error($conn));
  }
  
  $_SESSION['msgtype']="alert-success";
  $_SESSION['msg']="User registered successfully";
  echo "<script>alert('User registered successfully');</script>";
  header("location: index.php");
}

 if(isset($_POST['login'])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $hashed_pass=password_hash($password, PASSWORD_DEFAULT);
    
    //Insert into the database
    $stmt=$conn->prepare("SELECT email,password FROM users WHERE email=? and password=? ");
    $stmt->bind_param('ss',$email,$hashed_pass);
    $stmt->execute();
    $stmt -> bind_result($id,$email);
    $rs=$stmt->fetch();
    $stmt->close();
    if($rs)
    {   $_SESSION['id']=$email;
        $_SESSION['msgtype']="alert-success";
        $_SESSION['msg']="User logged in successfully";
        echo "<script>alert('User logged in successfully');</script>";
    }
    else{
        $_SESSION['msgtype']="alert-danger";
        $_SESSION['msg']="Wrong email or password failed";
        echo "<script>alert('Wrong email / password failed');</script>";
    }    
    if (isset($_SESSION['id'])) {
        header('Location: userhome.php');
    }else{
        $_SESSION['msgtype']="alert-danger";
        $_SESSION['msg']="Wrong email or password failed";
        echo "<script>alert('Wrong email / password failed');</script>";
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