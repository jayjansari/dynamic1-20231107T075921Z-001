<?php
include 'greenstore.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show1</title>
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
    <table class="table table-dark">
<tr>
    <th>id</th>
    <th>image</th>
    <th>product</th>
    <th>cat</th>
    <th>price</th>

</tr>

<?php
$select="SELECT * FROM `demo` WHERE 1";
$result=mysqli_query($con,$select);
while($row=mysqli_fetch_array($result))
{
 ?>
 <tr>
    <td><?php echo $row['id'];     ?></td>
    <td>
        <img src="image/<?php echo $row['image'];  ?>" alt="" style="height:100px;width:100px;">
    </td>
    <td><?php echo $row['product'];  ?></td>
<td><?php echo $row['cat'];    ?></td>
<td><?php echo $row['price'];?></td>
<td>
    <a href="delete1.php?id=<?php echo $row['id'] ?>">
<button>delete1</button></a>
</td>

<td>
    <a href="update1.php?id=<?php echo $row['id'] ?>">
<button class="btn btn-danger">update1</button></a>
</td>


 </tr>

 <?php
}

?>

    </table>
</body>
</html>