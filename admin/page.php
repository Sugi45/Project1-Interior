<?php
include 'connection.php';
?>
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

<?php
    $page_query = "SELECT * FROM `news` ORDER BY id ";
    $page_result = mysqli_query($con, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a href='galleryadd.php?page=1'>First</a>";
     echo "<a href='galleryadd.php?page=".($page - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='galleryadd.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='galleryadd.php?page=".($page + 1)."'>>></a>";
     echo "<a href='galleryadd.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>