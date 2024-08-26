<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ggs");
if($con){
    
}
else{
    echo "DB Failed";
}
?>