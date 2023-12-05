<?php
include'greenstore.php';
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

<form action="" method="post" enctype="multipar/form-data">
  <div class="form-group">
    <input type="file" class="form-control" placeholder="" id="email" name="pimg">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="cat">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="pname">
  </div>

  <div class="form-group">
    <input type="number" class="form-control" placeholder="Enter password" id="pwd" name="price">
  </div>

  
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>


</body>
</html>

<?php
if(isset($_POST['sub'])){
    
}

?>