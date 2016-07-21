<?php
ob_start();
include("connect-db.php");
if(isset($_POST['send'])!="")
{
    $text=mysql_real_escape_string($_POST['text']);
    $update=mysql_query("INSERT INTO task(text)VALUES ('$text')");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:index.php');
    }
    else
    {
        $errormsg=mysql_error();
        var_dump($errormsg);
        //$errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";
    }
}
ob_end_flush();
?>
