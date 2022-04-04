<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="container" style="margin-top:150px">   

   <button  type="button" class="btn btn-primary" style="background:#37517e;margin-bottom:10px"  data-toggle="modal" data-target="#addResourceModal">Add Resource</button>

   <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Summary</th>
                <th>Incoming Message</th>
                <th>Response</th>
                <th>Link</th>
                <th>Status</th>
                <th>Category</th>
                <th>Industry</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT * FROM resources";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_array($result)){
              
              if(mysqli_num_rows($result) > 0){ 

                //    $sql ="SELECT * FROM status WHERE status_id=".$row['status_id'];
                //    $result = mysqli_query($conn, $sql);
                //    while($statusVal = mysqli_fetch_array($result)){
                //        $statusName= $statusVal['name'];
                //    }

                //    $sql ="SELECT * FROM category WHERE category_id=".$row['category_id'];
                //    $result = mysqli_query($conn, $sql);
                //    while($catVal = mysqli_fetch_array($result)){
                //        $categoryName= $catVal['name'];
                //    }

                //    $sql ="SELECT * FROM type WHERE type_id=".$row['type_id'];
                //    $result = mysqli_query($conn, $sql);
                //    while($typeVal = mysqli_fetch_array($result)){
                //        $typeName= $typeVal['name'];
                //    }
                
                ?>
                <tr>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['summary']; ?></td>
                    <td><?= $row['details']; ?></td>
                    <td><?= $row['incoming_message']; ?></td>
                    <td><?= $row['response']; ?></td>
                    <td><?= $row['link']; ?></td>
                    <td><?= $row['status_id']; ?></td>
                    <td><?= $row['category_id']; ?></td>
                    <td><?= $row['type_id']; ?></td>
                </tr>
                <?php  }?>
            <?php  } ?>  
        </tbody>
        <tfoot>
            <tr>
                <th>Title</th>
                <th>Summary</th>
                <th>Incoming Message</th>
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
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
</body>
</html>