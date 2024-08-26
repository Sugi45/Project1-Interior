<?php
if(!isset($_SESSION['login']))
{
    echo '<script>window.location.assign("index.php")</script>';
}
?>