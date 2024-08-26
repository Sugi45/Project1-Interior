<?php
include 'connection.php';
$id=$_GET['id'];
  
    $m = "DELETE FROM `news` WHERE `id`='$id'";
    
    $r=mysqli_query($con,$m);
    if($r){
    ?>
    <script>
      alert("Deleted Successfully");
      header('news.php');
    </script>
    <?php
    }
    else{
      ?>
      <script>
      alert("Cannot Deleted the Data");
    </script>

<?php
    }
   ?>