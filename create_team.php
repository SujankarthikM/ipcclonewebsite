<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $teamName = $_POST["teamName"];
    $teamDescription = $_POST["teamDescription"];

    $sql = "INSERT INTO teams (team_name, team_description) VALUES ('$teamName', '$teamDescription')";

    if ($conn->query($sql) === TRUE) {

        header("Location: teams1.php");
        exit();
    } else {
        echo "Error creating team: " . $conn->error;
    }

    $conn->close();
}
?>
