<?php
ob_start();
include('connect-db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['update'])) {
        $etext = $_POST['etext'];
        $updated = mysql_query("UPDATE task SET
        text='$etext' WHERE id='$id'") or die();
        if ($updated) {
            $msg = "Successfully Updated!!";
            header('Location:index.php');
        }
    }
}  //update ends here
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Edit form</title>
    <link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getselect = mysql_query("SELECT * FROM task WHERE id='$id'");
    while ($profile = mysql_fetch_array($getselect)) {
        $text = $profile['text'];
        ?>
        <div class="display">
            <form action="" method="post" name="insertform">
                <p>
                    <label for="name" id="preinput"> Text: </label>
                    <input type="text" name="etext" required placeholder="Enter your text" autofocus
                           value="<?php echo $text; ?>"/>
                    <input type="submit" name="update" value="Edit"/>
                </p>
            </form>
        </div>
    <?php }
} ?>
</body>
</html>
