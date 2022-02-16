<?php 
    if (isset($_POST["addtodo"])){
        $todo = $_POST['todo'];
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

        $sql = "INSERT INTO todolist (todo) VALUES ('".$todo."')";
        if ($conn->query($sql) === TRUE) {
            header("Location:/todo/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
