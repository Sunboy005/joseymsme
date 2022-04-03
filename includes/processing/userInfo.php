<?php
require_once("includes/connections/connect.php");
if (isset($_SESSION['id'])){
    $aid=$_SESSION['id'];
    $ret="select * from users where email = '$aid'";
    $result=mysqli_query($conn,$ret);
    while ($row=mysqli_fetch_array($result))
    {
        $myid=$row['user_id'];
        $myfname=$row['first_name'];
        $mylname=$row['last_name'];
        $myphone=$row['phone'];
        $myoccupation=$row['occupation'];
        $myaddresscode=$row['address_id'];
        $myindustrycode=$row['industry_id'];
        $myemail=$row['email'];
    }
}
?>
