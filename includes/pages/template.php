<div class="container">
    <?php 
    include_once"includes/processing/counters.php";
    $result = mysqli_query($conn,"SELECT * FROM `templatecategory`");
    while($row = mysqli_fetch_array($result)){
        if(count($row)<=0){?>
            <div class="col text-center">
                No templates available
            </div>
            <?php
        }else{
            $tempcatid=$row['templatecategory_id'];
            $tempcatname=$row['name'];
            ?>
            <div class="row">
                <br/>
                <div class="col">
                    <h4><?php echo $tempcatname; ?></h4>
                </div>	
            </div>
            <?php 
            $query = "SELECT * FROM `templates` WHERE templatecategory_id='$tempcatid'";
            $stmt2 = $conn->prepare($query);
            $stmt2->execute();
            $res=$stmt2->get_result();
            while($rowd=$res->fetch_object())
            {
                    $tempid=$rowd->template_id;
                    $tempname=$rowd->title;
                    $tempdownloadlink=$rowd->dlink;
                    $temptypeid=$rowd->templatetype_id;
                    $ret="select * from templatetype where templatetype_id = '$temptypeid'";
                    $result=mysqli_query($conn, $ret);
                    while ($rows=mysqli_fetch_array($result))
                    {
                        $temptype=$rows['name'];
                        if ($temptype=='doc'||$temptype=='docx'){
                            $temptype1='file-word-o text-primary';
                        }else if ($temptype=='ppt'){
                            $temptype1='file-powerpoint-o text-warning';
                        }else if ($temptype=='pdf'){
                            $temptype1='file-pdf-o text-danger';
                        }else if ($temptype=='xls'||$temptype=='xlsx'){
                            $temptype1='file-excel-o text-success';
                        }else{
                            $temptype1='file-text-o text-info';
                        } 
                    ?>
                    
                    <div class="card col-sm-2" style="margin:5px; padding-top:15px">
                        <a href="<?php echo $tempdownloadlink;?>">
                            <div class="template-doc">
                                <i class="fa fa-<?php echo $temptype1;?> fa-5x"></i>
                                <p class="template-details"><?php echo $tempname; ?></p>
                            </div>
                        </a>
                    </div>
                <?php }
            }
        }
    }?>
</div>
