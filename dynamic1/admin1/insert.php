<?php
include'greenstore.php';
session_start();

if(!isset($_SESSION['login'])||$_SESSION['login']=!true){
    echo "<script>location.href='log.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="file" class="form-control" placeholder="" id="email" name="image">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="product" id="pwd" name="product">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="cat" id="pwd" name="cat">
  </div>

  <div class="form-group">
    <input type="number" class="form-control" placeholder="price" id="pwd" name="price">
  </div>

  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>


  <a href="logout1.php"> <button>logout</button></a>

</body>
</html>

<?php

if(isset($_POST['sub'])){
   $image=$_FILES['image']['name'];
   $product=$_POST['product'];
   $cat=$_POST['cat']; 
   $price=$_POST['price']; 

   $insert="INSERT INTO `demo`( `image`, `product`, `cat`, `price`) VALUES ('$image','$product','$cat','$price')";
   $result=mysqli_query($con,$insert);

   if($result){
    echo "<script>alert('insert')</script>";
    // echo "<script>location.href='insert.php'</script>";

   }
   else{
    echo "error";
   }
   $target="image/";
   $file=$target.basename($_FILES['image']['name']);
   $move=move_uploaded_file($_FILES['image']['tmp_name'],$file);

  
}

?>