<?php
if(isset($_POST["uname"]) && isset($_POST["pass"])){
$server="localhost";
$username="root";
$password="";
$database="testing";
$conn= mysqli_connect($server, $username, $password, $database);
if($conn)
 {
    $sql = "SELECT username,pass from Reg_Table where username='".$_POST["uname"]."' and pass='".$_POST["pass"]."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["user"]=$_POST["uname"];
        $_SESSION["pass"]=$_POST["pass"];
        header('location: welcome.php');
      } else {
        echo "0 results";
      }
 }
 else
{
    die("error".mysqli_connect_error());
}
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>
    <h1 class="text-center ">Login in this website</h1>
    <div class="container">
    <form action="" method="post">
  <div class="mb-6">
    <label for="uname" class="form-label">User Name</label>
    <input type="text" class="form-control" id="uname" name="uname" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-6">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" required>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
  </body>
</html>