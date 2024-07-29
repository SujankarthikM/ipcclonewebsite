<?php
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teamID = $_POST["teamID"];
    $userID = $_POST["userID"];

    // Fetch member_name and member_email from the 'users' table based on the provided user ID
    $userInfoQuery = "SELECT Username, Email FROM users WHERE User_ID = '$userID'";
    $result = $conn->query($userInfoQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $memberName = $row["Username"];
        $memberEmail = $row["Email"];

        // Fetch role from the 'users' table based on the provided user ID
        $roleQuery = "SELECT Role FROM users WHERE User_ID = '$userID'";
        $result = $conn->query($roleQuery);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $role = $row["Role"];

            // Insert into 'team_members'
            $insertQuery = "INSERT INTO team_members (team_id, member_name, member_email, role) VALUES ('$teamID', '$memberName', '$memberEmail', '$role')";

            if ($conn->query($insertQuery) === TRUE) {

                header("Location: teams1.php");
                exit();
            } else {
                echo "Error adding member: " . $conn->error;
            }
        } else {
            echo "Role not defined for the user.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
