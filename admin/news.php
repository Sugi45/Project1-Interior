<?php
$news=true;
?>

<?php
include 'connection.php';
include 'user-login.php';
include 'link.php';
include 'head.php';






if(isset($_POST['submit'])){
 $a=$_POST['head'];
 $b=$_POST['news'];
   
        $m ="INSERT INTO `news`(`head`, `news`, `date`) VALUES ('$a','$b',now())";
    
        $r=mysqli_query($con,$m);
        if($r){
        ?>
        <script>
          alert("Added Successfully");
        </script>
        <?php
        }
        else{
          ?>
          <script>
          alert("Cannot Added the Data");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
       .btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
     .table{
       color: black;
       background-color: white;
    }
    .tr td{
    background-color: black;
    color: white;
}
    #tb{

        width: 90%;
    }
    
        #file {
	width: 20%;
	
	height: 35px;
	
	background: #14adc6;
	color: black;

	
	text-align: center;
	margin-top: -55px;
}
#file1 {
	/* width: 20%; */
	height: 35px;
	background: #14adc6;
	color: black;

	text-align: center;
	margin-top: -3px;
	left: 270px;
	border-radius: 5px;
}
#he{
    width: 100%;
    text-align: center;
}  .head {
	width: 100%;
	height: 50px;
	background-color: #0228f2;
	text-align: center;
	color: white;
	font-weight: bold;
	font-size: 22px;
}
    .news{
        width: 100%;
        height: 50px;
        background-color: red;
        text-align: center;
        position: absolute;
        margin-top: 10px;
        right: 20px;
        padding: 20px 0;
}
     
     #p{

        width: 100%;
        text-align: center;
        align-items: center;
     }
     #h{
        color: white;
        font-weight: bolder;
        font-size: 22px;
        font-weight: bold;
     }
     #m{
        font-size: 20px;
        color: white;
        font-weight: bolder;
     }
     #anc {
	padding: 0px 14px;
	/* margin-top: 14px; */
	border: 1px solid skyblue;
	/* position: absolute; */
	/* float: left; */
	/* width: 100%; */
	align-content: center;
	/* margin-left: 517px; */
}
.btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
.btn-primary:hover{
    background-color: #18A0A9 !important;
}
    
    
</style>


<body background="">

<!--
<div class="container">
                <div class="row">
                    <div class="col-md-3">
                    <div class="head">
                <h4 id="h">Breaking News</h4>
                </div>
            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="news">
                <marquee id="m" behavior="scroll" direction="left">India vs Bangladesh: Virat Kohli slams 44th ODI century, first in over three years </marquee>
            </div>
---->



<div id="page-wrapper">
            <div id="page-inner">



<div class="row">
    <div class="col-md-3">
    <div class="head">
                <h4 id="h">Breaking News</h4>
                </div>
    </div>
    <div class="col-md-9">
                <div class="news">
                <marquee id="m" behavior="scroll" direction="left">
                    
                    <?php $t=mysqli_query($con,"SELECT `news` FROM `news` ORDER BY id DESC LIMIT 0,1");
                          while($ro=mysqli_fetch_array($t)){


                            echo $ro['news'];
                          }
                
                
                ?></marquee>
            </div>
</div>



                <div class="row">
                    <div class="col-md-12">



<div></div>



                     



                       
						<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>




  <br /><br />
  <div class="container">
   <h3 align="center"></h3> 


   <?php


$record_per_page = 2;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM `news` order by id LIMIT $start_from, $record_per_page";
$result = mysqli_query($con, $query);

?>















   <div class="table-responsive">


   <form action="" method="post" class="form-group" enctype="multipart/form-data">

<input type="text" placeholder="Add Heading" name="head" class="form-control"><br>

<input type="text"  name="news" id="" class="form-control" placeholder="Add News"> <br>

<button name="submit" type="submit"  class="btn round btn-primary">Add</button>




</form>
   

    <table id="tb" class="table table-bordered table table-hover">
     <tr class="tr">
      
      
      
     
      <td>Heading</td>
      <td>News</td>
      <td>DATE</td>
      <td>Action</td>
      
      
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>

     <td><?php echo $row["head"];?></td>
     <td><?php echo $row["news"];?></td>
     
     <td><?php echo $row["date"];?></td>
  <td>
    <a class="btn ifdn" href='newsdel.php?id=<?php echo $row["id"];?>'><i class="fa fa-trash"></i></a>
    </td>

      

    
      
     

     
     


     </tr>

     
     <?php
     }
     ?>
    </table>

    


    <div class="an">
    <a class="btn btn-primary" href="index.php">Logout</a>
    <a class="btn btn-primary" href="dashboard.php"><i class="fa fa-arrow-left" ></i></a>
    </div>
    <div align="center">
    <br />














    <?php
    $page_query = "SELECT * FROM `news` ORDER BY id ";
    $page_result = mysqli_query($con, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
   
    if($page > 1)
    {
     echo "<a id='anc' class='btn' href='news.php?page=1'>First</a>";
     echo "<a id='anc' class='btn' href='news.php?page=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<= $total_pages ; $i++)
    {     
     echo "<a id='anc' class='btn' href='news.php?page=".$i."'>".$i."</a>";
    }
    if($page <$total_pages )
    {
     echo "<a id='anc' class='btn' href='news.php?page=".($page + 1)."'>>></a>";
     echo "<a id='anc' class='btn' href='news.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>
 </body>




 <?php

if(isset($_GET['delid'])){

mysqli_query($con,"DELETE FROM `add` WHERE id='".$_GET['delid']."' ");

echo '<script>window.location.assign("galleryadd.php?id='.$_GET['id'].'")</script>';



}

 ?>

                    </div>
                </div>
				
				
                <!-- /. ROW  -->

              
				
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    
</body>
</html>
