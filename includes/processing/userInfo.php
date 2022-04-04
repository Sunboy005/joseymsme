<?php
require_once("includes/connections/connect.php");
if (isset($_SESSION['user'])){
    $aid=$_SESSION['user'];
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
        $mydesignationcode=$row['designation_id'];
        $myemail=$row['email'];
        if($mydesignationcode==1){
            $mydesignation="Admin";
        }else{
            $mydesignation="User";
        }
    }

    $ret="select * from industry where industry_id = '$myindustrycode'";
    $result=mysqli_query($conn,$ret);
    while ($row=mysqli_fetch_array($result))
    {
        $myindustry=$row['name'];
    }
    
    if($myaddresscode!=0){
        $ret="select * from address where address_id = '$myaddresscode'";
        $result=mysqli_query($conn,$ret);
        while ($row=mysqli_fetch_array($result))
        {
            $myaddress=$row['address'];
            $mycity=$row['city'];
            $mylg=$row['lg'];
            $mystate=$row['state'];
        }
    }
}
?>
