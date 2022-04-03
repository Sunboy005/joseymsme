<?php
require_once("includes/connections/connect.php");
if (isset($_GET['add_resource'])){
    $ret="INSERT INTO resources 
    (title, summary, incoming_message, response, link, status_id, category_id, industry_id, type_id)
    VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');";
    $result=mysqli_query($conn,$ret);
}
?>
