<?php
    $todoToBeEdited = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Personal TODO App</h1>
            <p>Edit Todo here</p>
            <form action="/todo/edit1.php" method="post">
                <input type="text" placeholder="Type Something" style="width:100%" name="todo">
                <input type="text" placeholder="Type Something" style="width:100%;display:none" name="id" value="<?php echo $todoToBeEdited?>">
                <input type="submit" class="btn btn-primary" style="display:none" name="edittodo">
            </form>
        </div>
    </div>
</body>
</html>
