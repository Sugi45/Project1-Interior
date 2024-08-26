<?php


include 'connection.php';




$gallery=true;


$connect = mysqli_connect("localhost", "root", "", "ggs");
$record_per_page = 8;
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

$query = "SELECT * FROM gallery order by id LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);

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

<style>
    .btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
.btn-primary:hover{
    background-color: #18A0A9 !important;
}

.tr td{
    background-color: black;
    color: white;
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
a:hover{
    background-color: lightseagreen;
}

    #tb{

        width: 90%;
    }h1, .h1, h2, .h2, h3, .h3 {
	margin-top: 7px;
	margin-bottom: -5px;
	border-bottom: 1px solid black;
	padding: 10px 0;
}
</style>


<div id="page-wrapper">
            <div id="page-inner">

            <h3 align="" id="g1">Gallery</h3>
            
                <div class="row">
                    <div class="col-md-12">
                        






                    <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


  <br /><br />
  <div class="container">

  <a class="btn btn-primary" href="titleadd.php"><i class="fa fa-plus" aria-hidden="true"></i>
</a>

  
 <div class="add">  </div><br />




   <div class="table-responsive">
    <table id="tb" class="table table-bordered table table-hover">
     <tr class="tr" >
      <td id="t" >ID</td>
      <td id="t1">TITLE</td>
      
      
      <td id="t3">Action</td>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr id="t2">
        
      <td><?php echo $row["id"]; ?></td>
      


      
      <td id="title" > <?php echo $row["title"]; ?></td>
      
     <!--  
      <a href="" id="sub" onchange="check(this.value);">
     
     
     <td><img src="C:\xampp\htdocs\sc\img/<?php /* echo $row["photo"]; */?>"></td>--->
     

      <td><a class="btn btn-primary" href='gdel.php?id=<?php echo $row["id"]?>'  onclick="return confirm('Do Want Delete This')"><i class="fa fa-trash"></i></a>
     <!-- <a class="btn btn-primary" href='gupd.php?id=<?php/* echo $row["id"]*/?>'>Edit</a>---->
      <a class="btn btn-primary" href='galleryadd.php?id=<?php echo $row["id"]?>' id="add" ><i class="fa fa-image"></i></a>


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
    $page_query = "SELECT * FROM gallery ORDER BY id ";
    $page_result = mysqli_query($connect, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    
    if($page > 1)
    {
     echo "<a id='anc' class='btn ' href='sm.php?page=1'>First</a>";
     echo "<a id='anc'  class='btn ' href='sm.php?page=".($page - 1)."'>Prev</a>";
    }
    for($i=$start_loop; $i<=$total_pages; $i++)
    {     
     echo "<a id='anc'  class='btn ' href='sm.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $total_pages)
    {
     echo "<a id='anc'  class='btn ' href='sm.php?page=".($page + 1)."'>Next</a>";
     echo "<a id='anc'  class='btn ' href='sm.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>
 







						
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