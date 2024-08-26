<?php
include 'connection.php';
$id=$_GET['id'];
  
    $m = "DELETE FROM `blog` WHERE `id`='$id'";
    
    $r=mysqli_query($con,$m);
    if($r){
    ?>
    <script>
      alert("Deleted Successfully");
      window.location.assign('blog.php');
      
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