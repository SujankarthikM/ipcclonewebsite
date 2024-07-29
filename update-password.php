<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["changePassword"])) {
        $conn = new mysqli("localhost", "root", "", "test");

        $newPassword = $_POST["newPassword"];
        $repeatNewPassword = $_POST["repeatNewPassword"];
        $email = $_SESSION['username'];

        // Check if new password and repeat new password match
        if ($newPassword === $repeatNewPassword) {
            // Hash the new password


            // Update the password in the database
            $updateSql = "UPDATE users SET Password = '$newPassword' WHERE Email = '$email'";
            if ($conn->query($updateSql) === TRUE) {
                echo "Password updated successfully!";
            } else {
                echo "Error updating password: " . $conn->error;
            }
        } else {
            echo "New password and repeat new password do not match.";
        }

        $conn->close();
    }
}
?>
