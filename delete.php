<?php
ob_start();
include("connect-db.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysql_query("DELETE FROM task WHERE id='$delete'");
    if($delete)
    {
        header("Location:index.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>
