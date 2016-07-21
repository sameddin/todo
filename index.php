<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>ToDo List</h1>

<form action="add.php" method="post" name="insertform">
    <p>
        <label for="name" id="preinput"></label>
        <input type="text" name="text" required placeholder="Enter your text" autofocus/>
        <input type="submit" name="send" value="Add" />
    </p>
</form>
<?php include('view.php'); ?>
</body>
</html>
