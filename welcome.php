<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>welcome</title>
  
</head>
<body>
  <h1>welcome user </h1>
  <div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">user Name</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">zip</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
session_start();
if(isset($_SESSION["user"])&&isset($_SESSION["pass"])){
$server="localhost";
$username="root";
$password="";
$database="testing";
$conn= mysqli_connect($server, $username, $password, $database);
if($conn)
 {
$sql = "SELECT * FROM reg_table";
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
      ?>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $row["id"].' ';?></td>
      <td><?php echo $row["firstname"]." ";?></td>
      <td><?php echo $row["lastname"]." ";?></td>
      <td><?php echo $row["username"]." ";?></td>
      <td><?php echo $row["city"]." ";?></td>
      <td><?php echo $row["state"]." ";?></td>
      <td><?php echo $row["zip"]." ";?></td>
      
      <td><a href="#" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-times"></i></a></td>
      <td><a href="display.php ?id=<?php echo $row["id"].' ';?>" data-toggle="tooltip" data-placement="top" title="update"> <i class='fas fa-user-cog'></i></a><td>
      
    </tr>
   <?php
    }
    
  }
}
  ?>
  </tbody>
</table>

</div>






  <?php
// session_start();
// if(isset($_SESSION["user"])&&isset($_SESSION["pass"])){
// $server="localhost";
// $username="root";
// $password="";
// $database="testing";
// $conn= mysqli_connect($server, $username, $password, $database);
// if($conn)
//  {
// $sql = "SELECT * FROM reg_table";
// $result = $conn->query($sql);
//     while ($row = $result->fetch_assoc()) {
//         echo $row["id"].' ';
//         echo $row["firstname"]." ";
//         echo $row["lastname"]." ";
//         echo $row["username"]." ";
//         echo $row["city"]." ";
//         echo $row["state"]." ";
//         echo $row["zip"]." ";
//         echo "<br>";
//     }
//   }
//   else
//   {
//       die("error".mysqli_connect_error());
//   }
// }
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</body>
</html>

