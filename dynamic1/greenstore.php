<?php
$server="localhost";
$user="root";
$pass="";
$database="dynamic";

$con=mysqli_connect($server,$user,$pass,$database);

if($con){
    echo "connect";

}
else{
    echo "error";
}


?>