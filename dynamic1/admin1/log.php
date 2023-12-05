<?php
$server="localhost";
$user="root";
$pass="";
$database="dynamic";

$con=mysqli_connect($server,$user,$pass,$database);

if($con)
{
    echo "connect";
}
else{
    echo "error";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<form action="" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pass">
  </div>
  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>

</body>
</html>

<?php
if(isset($_POST['sub'])){
$email=$_POST['email'];
$pass=$_POST['pass'];

$insert="SELECT * FROM `insta` WHERE `email`='$email' and `pass`='$pass'";
$result=mysqli_query($con,$insert);

$num=mysqli_num_rows($result);


session_start();
$_SESSION['login']=true;

if($num==1){

    echo "<script>alert('log')</script>";
    echo "<script>location.href='insert.php'</script>";
}

else{
    echo "error ";
}



}

?>