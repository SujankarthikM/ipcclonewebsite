<?php
session_start();
    $conn = new mysqli("localhost", "root", "", "test");    

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM competitions WHERE  Type = 'World Finals'";
$result = $conn->query($sql);

$competitions = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $competitions[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competitions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #2e3c4e;
            color: #fff;
            text-align: center;
            padding: 2em 0;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #3f5269;
            padding: 1em 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 1em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #546d8c;
        }

        .social-bar {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
            display: flex;
            align-items: center;
            background-color: #2e3c4e;
            padding: 0.3em 0.5em;
            width: 100%;
        }

        .social-bar img {
            width: 50px;
            margin-right: 10px;
        }

        .social-bar img.icpc-logo {
            width: 100px;
            margin-right: 10px;
        }

        .social-links {
            margin-left: auto;
        }

        .buttons {
            display: flex;
            align-items: center;
        }

        .login-button,
        .signup-button {
            margin-left: 1em;
            background-color: #2e3c4e;
            color: #fff;
            border: none;
            padding: 0.5em 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover,
        .signup-button:hover {
            background-color: #3f5269;
        }

        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin-top: 60px; /* Adjust the value based on the height of your social bar */
        }

        .mySlides {
            display: none;
        }

        .mySlides img {
            width: 100%;
            height: auto;
        }

        section
      	 {
            position: absolute;
            max-width: 800px;
            padding: 1em;
            background-color: rgba(0, 0, 0, 0.8); /* Black with 80% opacity */
            color: #fff; /* White font color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        section {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

       #regional-instructions {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    max-width: 800px;
    padding: 1em;
    background-color: rgba(0, 0, 0, 0.0); 
    color: #fff; /* White font color */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}


        .instruction-buttons {
            display: flex;
            justify-content: center;
            margin-top: 1em;
        }

        .instruction-button {
            background-color: #546d8c;
            color: #fff;
            border: none;
            padding: 0.5em 1em;
            border-radius: 5px;
            margin: 0 1em;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .instruction-button:hover {
            background-color: #3f5269;
        }

	#about-icpc {
            text-align: left;
            padding: 2em;
        }

        #about-icpc h2 {
            font-size: 60px;
            color: #074eab;
        }

        #about-icpc p {
            font-size: 30px;
            color: #555;
            line-height: 1.6;
        }

	
        #icpc-stats {
            text-align: center;
            padding: 2em;
        }

        
        #icpc-stats h2 {
            font-size: 60px;
            color: white;
        }

      
        #icpc-stats p {
            font-size: 50px;
            color: white;
            line-height: 1.6;
        }

        #icpc-stats {
            background-color: rgba(7, 78, 171, 1); /* Background color with opacity */
            border-radius: 10px;
            margin-top: 20px;
        }

	.line-separator {
    border-top: 5px solid #074eab;
    margin: 20px 0;
    padding-left: 20px;
    padding-right: 20px;
    width: 80%; /* Adjust the width as needed */
    margin-left: auto;
    margin-right: auto;
}

	.custom-button {
            background-color: #074eab;
	    text-decoration: none;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .custom-button:hover {
            background-color: #3f75a1; /* Adjust the hover color as needed */
        }


        footer {
            text-align: center;
            padding: 1em 0;
            background-color: #2e3c4e;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="social-bar">
        <img src="icpc.png" alt="ICPC Logo" class="icpc-logo">
        <div class="social-links">
            <a href="https://www.facebook.com/ICPCNews" target="_blank"><img src="facebook.png" alt="Facebook"></a>
            <a href="https://twitter.com/ICPCNews" target="_blank"><img src="twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/ICPCNews/" target="_blank"><img src="instagram.png" alt="Instagram"></a>
            <a href="https://news.icpc.global/linkedin" target="_blank"><img src="linkedin.png" alt="Linkedin"></a>
        </div>
        <?php


if (isset($_SESSION['username'])) {
    // User is logged in
    echo '<div class="buttons"><p class="welcome-message">Welcome, ' . $_SESSION['username'] . '!</p></div>';
} else {
    // User is not logged in
    echo '<div class="buttons">
            <button class="login-button">Login</button>
            <button class="signup-button">Sign Up</button>
          </div>';
}
?>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h2>Upcoming World Finals</h2>
    <table>
        <thead>
            <tr>
                <th>Competition ID</th>
                <th>Competition Name</th>
                <th>Type</th>
                <th>Location</th>
                <th>End of Registration Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($competitions as $competition) {
                echo "<tr>";
                echo "<td>{$competition['Competition_ID']}</td>";
                echo "<td>{$competition['Competition_Name']}</td>";
                echo "<td>{$competition['Type']}</td>";
                echo "<td>{$competition['Location']}</td>";
                echo "<td>{$competition['End_of_Registration_Date']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
