<?php
include'greenstore.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update1</title>
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
<?php
$id=$_GET['id'];
$select="SELECT * FROM `demo` WHERE `id`='$id'";
$result=mysqli_query($con,$select);
$row=mysqli_fetch_array($result);

?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
  <img src="image/<?php echo $row['image'];  ?>" alt="" style="height:100px;width:100px;">
    <input type="file" class="form-control" placeholder="" id="email" name="image"
    value="">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="product" id="pwd" name="product"
    value="<?php echo $row['product'];  ?>">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="cat" id="pwd" name="cat"
    value="<?php echo $row['cat'];  ?>">
  </div>

  <div class="form-group">
    <input type="number" class="form-control" placeholder="price" id="pwd" name="price"
    value="<?php echo $row['price'];  ?>">
  </div>

  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>


</body>
</html>

<?php
if(isset($_POST['sub'])){
   $image=$_FILES['image']['name'];
   $product=$_POST['product'];
   $cat=$_POST['cat']; 
   $price=$_POST['price']; 

   $update="UPDATE `demo` SET `image`='$image',`product`='$product',`cat`='$cat',`price`='$price' WHERE `id`='$id'";
   $result=mysqli_query($con,$update);

   if($result){
    echo "<script>alert('Product Update')</script>";
    echo "<script>location.href='show1.php'</script>";

   }
   else{
    echo "error";
   }
   $target="image/";
   $file=$target.basename($_FILES['image']['name']);
   $move=move_uploaded_file($_FILES['image']['tmp_name'],$file);

}

?>