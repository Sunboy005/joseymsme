<link rel="stylesheet" href="assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css">

<style>
    
    @media only screen and (max-width:600px) {
        
       .content{
           display: flex;
           flex-direction: column;
       }

       .x{
           width: 100% !important;
           background-color: yellow !important;
       }
         
    }
</style>
<body>   
<div class="container-fluid" style="margin-top:150px">   
    <div class="row content">
        <div class="col-sm-2 col-xs-12 x">
            <?php include "includes/pages/general/adminsidebar.php";?>
        </div>
        <div class="col-sm-10">
            <button  type="button" class="text-white p-2" style="background:#37517e; margin:10px"  data-toggle="modal" data-target="#addResourceModal"><i class="fa fa-plus fx-5"></i> &nbsp; Resource</button>
            <table id="example1" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Question</th>
                        <th>Response</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>Details</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM resources";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)){
                    
                    if(mysqli_num_rows($result) > 0){ 
                        switch ($row['status_id']) {
                            case 1:
                            $status = "Status1";
                            break;
                            case 2:
                            $status = "Status2";
                            break;
                        }
                        switch ($row['category_id']) {
                            case 1:
                            $category = "Category1";
                            break;
                            case 2:
                            $category = "Category2";
                            break;
                        }
                        switch ($row['type_id']) {
                            case 1:
                            $type = "Type1";
                            break;
                            case 2:
                            $type = "Type2";
                            break;
                        }

                    ?>
                        <tr>
                            <td><?= $row['title']; ?></td>
                            <td><?= $row['summary']; ?></td>
                            <td><?= $row['incoming_message']; ?></td>
                            <td><?= $row['response']; ?></td>
                            <td><?= $row['link']; ?></td>
                            <td><?= $status; ?></td>
                            <td><?= $category; ?></td>
                            <td><?= $row['details']; ?></td> 
                            <td><?= $type ?></td>
                        </tr>
                        <?php  }?>
                    <?php  } ?>  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Questions</th>
                        <th>Response</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>Industry</th>
                        <th>Type</th>
                    </tr>
                </tfoot>
            </table>
        </div>
            </div>
   <script src="assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example1').DataTable();
    } );
  </script>
</body>
</html>