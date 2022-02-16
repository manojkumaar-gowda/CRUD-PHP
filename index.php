<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Personal TODO App</h1>
            <p>Type your Todo here</p>
            <form action="/todo/add.php" method="post">
                <input type="text" placeholder="Type Something" style="width:100%" name="todo">
                <input type="submit" class="btn btn-primary" style="display:none" name="addtodo">
            </form>
        </div>
        


        <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "todo";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM todolist";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["id"]."</td>";
                        echo "<td>".$row["todo"]."</td>";
                        echo "<td>
                                <div class='row'>
                                    <div class='col'><a href='/todo/delete.php?id=".$row["id"]."' class='btn btn-danger'>Delete</a></div>
                                    <div class='col'><a href='/todo/edit.php?id=".$row["id"]."' class='btn btn-primary'>Edit</a></div>
                                </div>  
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>
