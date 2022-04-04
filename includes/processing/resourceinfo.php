<?php
require_once("includes/connections/connect.php");

if (!empty($_POST['add'])){
    

    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $message = $_POST['message'];
    $response = $_POST['response'];
    $link = $_POST['link'];
    $statusId = $_POST['status'];
    $categoryId = $_POST['category'];
    $details = $_POST['details'];
    $typeId = $_POST['type'];

    $ret="INSERT INTO resources 
    (title, summary, incoming_message, response, link, status_id, category_id, details, type_id)
    VALUES ('$title', '$summary', '$message', '$response', '$link', '$statusId','$categoryId','$details','$typeId');";
    $result=mysqli_query($conn,$ret);
}

?>
