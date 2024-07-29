<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Jaideep P - CMS</title>
<style>
body{
	color:black;
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("https://images.unsplash.com/photo-1516542076529-1ea3854896f2?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
  background-size: cover;
  background-attachment: fixed;
}

.navbar {
  overflow: hidden;
  animation: fadeIn 2s ease-in;
  width:70%;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover:not(.no-hover){
  background-color: #f2f2f2;
  color: #333;
}

.navbar .home {
  margin-left: auto;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(300px);
  }
  to {
    opacity: 0.8;
  }
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column-left {
  float: left;
  width: 40%;
  box-sizing: border-box;
}

.column-right {
  float: right;
  width: 50%;
  box-sizing: border-box;
  
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

.clearfix::after {
  content: "";
  display: table;
  clear: both;
}

#imgdiv
{
   float:right;
   animation:fadeIn 1s ease-in;
}
#datadiv
{
   float:left;
   width:75%;
}
#container
{
   display: inline-block;
   width:95%;
}

table{
	border:1px solid grey;
	animation:fadeInRight 1s ease-in-out;
	border-collapse:collapse;
	background-color:white;
	opacity:0.8;
}
td{
	border:1px solid grey;
	padding:10px;
}

.button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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

    <div class="dochead">
        <h1 style="display: flex; justify-content: space-between; align-items: center;">
            <span id="no-documents-message" style="text-align: left;display: none;">No documents found</span>
            <form id="upload-form" style="text-align: right;">
                <input type="text" id="file-title" placeholder="Enter title" required style="width: 200px;height:20px;font-size: 17px;">
                <input type="text" id="file-details" placeholder="Enter details" required style="width: 200px;height:20px;font-size: 17px;">
                <label for="file-upload" class="button">Upload resume</label>
                <input id="file-upload" hidden="hidden" type="file" class="file-upload" accept=".pdf,.doc,.docx,.txt">
            </form>
        </h1>
    </div>
    <br>
    <div id="container">
        <div id="datadiv">
            <?php
            // Assuming you have a database connection established
            $conn = new mysqli("localhost", "root", "", "test");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if (isset($_SESSION['username'])) {
                // User is logged in
                $email = $_SESSION['username'];

                $sql = "SELECT * FROM users WHERE Email = '$email'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $username = $row["Username"];
                    $role = $row["Role"];
                    $userId = $row["User_ID"];

                    // Display user details
                    echo '<table style="width:100%;">';
                    echo '<tr><td><b>Username</b></td><td>' . $username . '</td></tr>';
                    echo '<tr><td><b>Email</b></td><td>' . $email . '</td></tr>';
                    echo '<tr><td><b>Role</b></td><td>' . $role . '</td></tr>';
                    echo '<tr><td><b>User ID</b></td><td>' . $userId . '</td></tr>';
                    echo '</table>';
                }
            }

            $conn->close();
            ?>
        </div>
        <div id="imgdiv">
            <h4 style="color:white">
                <img id="myImg" src="C:\Users\Jaideep\Desktop\html project\images\profile pic logo.png" width="200px">
                <form action="/action_page.php">
                    <label for="fileInput" class="button">Change Photo</label>
                    <input id="fileInput" hidden="hidden" style="opacity:0.9;" type="file" id="myFile" name="filename"><br><br>
                    <button hidden="hidden" style="opacity:0.9;" id="myButton">Upload Photo</button>
                </form>
            </h4>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="column-left">
        <form method="post" action="update-password.php">

            <table style="width:100%;">
                <tr>
                    <td><b>Old password</b></td>
                    <td><input type="password" name="oldPassword" required></td>
                </tr>
                <tr>
                    <td><b>New password</b></td>
                    <td><input type="password" name="newPassword" required></td>
                </tr>
                <tr>
                    <td><b>Repeat new password</b></td>
                    <td><input type="password" name="repeatNewPassword" required></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="changePassword"><b>Change password</b></button></td>
                </tr>
            </table>
        </form>
    </div>
        </div>
    </div>
</body>

</html>

<script>
const myImg = document.getElementById("myImg");
const myButton = document.getElementById("myButton");
const fileInput = document.getElementById("fileInput");

myButton.addEventListener("click", function() {
  fileInput.click();
});

fileInput.addEventListener("change", function(event) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.addEventListener("load", function() {
      myImg.src = reader.result;
    });
    reader.readAsDataURL(file);
  }
});
</script>