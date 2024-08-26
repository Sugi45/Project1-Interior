<?php include 'connection.php'; 

$gallery=true;


$id=$_GET['id'];

$select="SELECT * FROM `gallery` WHERE `id`='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);


?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
            #file {
	width: 20%;
	
	height: 35px;
	
	background: #14adc6;
	color: black;
	position: absolute;
	
	text-align: center;
	margin-top: -55px;
}
#file1 {
	/* width: 20%; */
	height: 35px;
	background: #14adc6;
	color: black;
	position: absolute;
	text-align: center;
	margin-top: -57px;
	left: 270px;
	border-radius: 5px;
}
</style>

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
						





                        <form method='post' action="" class="an">
    
Title:<input class="form-control" type="text" name="a" value="<?php echo $row['title'] ?>" placeholder="Title"> <br>
     
       
     <input class="btn btn-primary" type="submit" value="Update" name="sub">
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





       



<?php
if(isset($_POST['sub'])){
   
    $a=$_POST['a'];
    
   



    $m ="UPDATE `gallery` SET `title`='$a' WHERE `id`='$id'";
    
    $data=mysqli_query($con,$m);

    if($data){
        ?>
        <script>
        alert("data updated successfully");
        window.open("http://localhost/admin/gallery.php","_self");
        </script>
        <?php
    }
  else{
    ?>
        <script>
        alert("please try again");
        </script>
        <?php
    }
}
?>






