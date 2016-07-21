<?php
include('connect-db.php');
$select = mysql_query("SELECT * FROM task ORDER BY id DESC");
$i = 1;
while ($userrow = mysql_fetch_array($select)) {
    $id = $userrow['id'];
    $text = $userrow['text'];
    ?>

    <div class="display">
        <p>
            <span><?= $text; ?></span>
            <a href="edit.php?id=<?php echo $id; ?>">Edit</span></a>
            <a href="delete.php?id=<?php echo $id; ?>"
               onclick="return confirm('Are you sure you wish to delete this task?');">
                <span style="color:red" class="delete" title="Delete">Delete</span></a>
        </p>
    </div>
<?php } ?>
