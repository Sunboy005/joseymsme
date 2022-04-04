<?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 10;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `resources` WHERE category_id='$categoryId'");
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
    if($total_records>=1){
    $result = mysqli_query($conn,"SELECT * FROM `resources` WHERE category_id='$categoryId' LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
            $preimage=$row["image"];
            $title=$row["title"];		
            $id=$row["resource_id"];
            $summary=$row["summary"];
            $link=$row["link"];
            $industryId=$row["industry_id"];
            $typeId=$row["type_id"];
            $statusId=$row["status_id"];
            $datecreated=$row["date_created"];
            if($categoryId!==0){
                $ret="select * from category where category_id = '$categoryId'";
                $result=mysqli_query($conn, $ret);
                while ($row=mysqli_fetch_array($result))
                {
                    $cat=$row['name'];
                }
            }
            if($industryId!==0){
                $ret="select * from category where category_id = '$industryId'";
                $result=mysqli_query($conn, $ret);
                while ($row=mysqli_fetch_array($result))
                {
                    $industry=$row['name'];
                }
            }
            if($statusId==1){
                $link="viewdetails.php?title='.$title.'&id='.$id.'";
            }
            if($preimage!=''){
                $image='<img src="images/uploads/'.$preimage.'" height="100px" width="230px">';
            }else{
            $image='<img src="assets/img/template.png" height="100px" width="230">';
            }         
            echo '<hr>';
            echo '<div class="row">';
                echo '<div class="col-sm-4 grid-margin">';
                echo '<div class="rotate-img">';
                    echo '<a class="catg_title" href="$link">'.$image.'</a>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-sm-8 grid-margin">';
                echo '<h4 class="font-weight-600 mb-2">';
                    echo '<a class="catg_title" href="http://'.$link.'">'.$title.'</a>';
                echo '</h4>';
                echo '<p class="fs-13 text-muted mb-0">';
                    echo '</span><span class="mr-2">'.$cat.' </span>'.$datecreated;
                echo '</p>';
                echo '<p class="fs-15">';
                    echo $summary;
                echo '</p>';
                echo '</div>';
            echo '</div>';			
        }
        echo "<div style='clear:both'></div>";
        echo "<hr>";
        echo '<div class="row">
                <div class="text-center col-sm-12">';
                    include "includes/pages/general/pagination.php";
            echo '</div>
                </div>';
                
    }else{
        echo '<div class="row">
                <div class="text-center col-sm-12">';
                    echo '<h4>No Resource Available</h4>';
            echo '</div>
                </div>';
    
    }
?>
