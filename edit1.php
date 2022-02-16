<?php
    if(isset($_POST['edittodo'])){
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
        $id = $_POST["id"];
        $todo = $_POST["todo"];
        $sql = "UPDATE todolist SET todo='".$todo."' WHERE id=".$id;

        if ($conn->query($sql) === TRUE) {
            header("Location:/todo/index.php");
        } else {
            header("Location:/todo/edit.php?id=".$id);
        }
        $conn->close();
    }
?>