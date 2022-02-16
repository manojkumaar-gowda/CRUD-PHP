<?php
    $dataToBeDeleted = $_GET["id"];
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

    // sql to delete a record
    $sql = "DELETE FROM todolist WHERE id=".$dataToBeDeleted;

    if ($conn->query($sql) === TRUE) {
        header("Location:/todo/index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>