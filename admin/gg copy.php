
<?php 
if(isset($_POST['submit'])){
 
   
    $countfiles = count($_FILES['file']['name']);

  
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
 
      
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'img/'.$filename);
 
    }
} 
?>























<?php

include 'connection.php';

$id=$_GET['id'];
if(isset($_POST['submit'])){
   

   
   


  
    $m = "UPDATE `add` SET `image`='$filename',`date`=now() WHERE `id`='$id'";
    
    $r=mysqli_query($con,$m);
    if($r){
    ?>
    <script>
      alert("update Successfully");
    </script>
    <?php
    }
    else{
      ?>
      <script>
      alert("Cannot update the Data");
    </script>

<?php
    }
}
   ?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

include 'link.php';

include 'head.php';
?>

<body>
<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Gallery
                            
                        </h1>
						





                        <form method='post' action='' enctype='multipart/form-data' class="an">
    <input type="file" name="file[]" id="file" multiple>

    <input type='submit' name='submit' value='Upload'>
</form>






             </div>
                </div>
				
				
              
				
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>












</body>
</html>