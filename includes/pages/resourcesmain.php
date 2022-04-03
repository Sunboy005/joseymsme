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

   <button class="" style="background:#37517e"  data-toggle="modal" data-target="#addResourceModal">Add Resource</button>

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
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
                <td>$198,500</td>
                <td>$198,500</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
                <td>$198,500</td>
                <td>$198,500</td>
                <td>$198,500</td>
            </tr>
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