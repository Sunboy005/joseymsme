<?php 
include "includes/processing/usedfunctions.php";
?>                
<form action="search.php" method="POST">
    <div class="form-group">
        <center><label class="control-label">Search the Site:</label></center>
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn" style="background:rgba(40, 58, 90, 0.9); color:aliceblue;" type="submit" name="submit-search">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
<hr>
<br>
<h2 class="mb-4 font-weight-300" style="color:rgba(40, 58, 90, 0.9)">
    <center>Latest news</center>
</h2>
    <?php 
    $query ="SELECT * FROM resources ORDER BY resource_id DESC LIMIT 5";
    $stmt2 = $conn->prepare($query);
    $stmt2->execute();
    $res=$stmt2->get_result();
    while($rowd=$res->fetch_object())
    {
        $spreimage=$rowd->image;
        $sid=$rowd->resource_id;
        $statusId=$rowd->status_id;
        $sdatet=$rowd->date_created;
        $sdatecreated=get_time_ago(strtotime($sdatet));
        $scategoryId=$rowd->category_id;
        $stitle=$rowd->title;
        if($scategoryId!==0){
            $sret="select * from category where category_id = '$scategoryId'";
            $sresult=mysqli_query($conn, $sret);
            while ($row=mysqli_fetch_array($sresult))
            {
                $scat=$row['name'];
            }
        }
        else{
            $scat="Uncategorized";
        }
        if($spreimage!=''){
            $simage='<img src="assets/img/resources/'.$spreimage.'" height="50px" width="50px">';
        }else{
        $simage='<img src="assets/img/template.png" height="50px" width="50">';
        }  
        if($statusId==1){
            $slink="viewdetails.php?title='.$title.'&id='.$id.'";
        }
    ?>
        <div class="col-md-12">
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-9">
                                <p><a href="<?php $slink; ?>"><?php echo $stitle;?></a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted"><?php echo $sdatecreated;?></small>
                                </div>
                            </div>
                            <div class="col-sm-3 rotate-img">
                                <?php echo $simage;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    
  