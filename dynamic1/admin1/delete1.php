<?php
include 'greenstore.php';

    $id=$_GET['id'];
    $delete="DELETE FROM `demo` WHERE `id`='$id'";
    $result=mysqli_query($con,$delete);

    if($result){
        echo "<script>alert('productdelete')</script>";
        echo "<script>location.href='show1.php'</script>";
    
       }
       else{
        echo "error";
       }

?>