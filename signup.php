<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup_submit'])) {
    $username = $_POST['signup_username'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_password'];
    $repeatPassword = $_POST['repeat_password'];
    $role = $_POST['signup_role'];
    $agreeTerms = isset($_POST['agree_terms']) ? 1 : 0;


    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the email is not already taken
    $checkEmail = "SELECT * FROM users WHERE Email = '$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email already registered";
    } else {
        // Insert user data into the database
        $insertUser = "INSERT INTO users (Username, Email, Password, Role) VALUES ('$username', '$email', '$password', '$role')";

        if ($conn->query($insertUser) === TRUE) {
            // User registration successful
            // Redirect to another file
            header("Location: index.html"); // Redirect to the login page after successful signup
            exit();
        } else {
            echo "Error: " . $insertUser . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
