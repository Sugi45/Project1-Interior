<?php

include 'connection.php';
if(isset($_GET['stdid']))
{
    $v1=mysqli_query($con,"select * from `add` where id='".$_GET['stdid']."' order by id ASC");
    while($v1res=mysqli_fetch_array($v1))
    {
        echo $v1res['id']; 
        echo $v1res['image'];
    }
    

}
?>
