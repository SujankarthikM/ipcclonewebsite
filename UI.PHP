<!-- Add this code where you want to display the username -->


<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICPC Website</title>
    <style>
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


        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
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
            <div class="dropdown">

            <div class="dropdown-content">
                <a href="profile.php">Profile</a>
                <a href="teams1.php">Teams</a>
                <a href="index.html">Logout</a>
            </div>
        </div>
        </div>

<?php


if (isset($_SESSION['username'])) {
    // User is logged in
    echo '
    <div class="dropdown">
    <div class="buttons"><p class="welcome-message">Welcome, ' . $_SESSION['username'] . '!</p></div>
    <div class="dropdown-content">
        <a href="profile.php">Profile</a>
        <a href="teams1.php">Teams</a>
        <a href="index.html">Logout</a>
    </div>
</div>';
} else {
    // User is not logged in
    echo '<div class="buttons">
            <button class="login-button">Login</button>
            <button class="signup-button">Sign Up</button>
          </div>';
}
?>

    </div>

    <div class="slideshow-container">
        <div class="mySlides">
            <img src="slideshow1.jpg" alt="Slide 1">
        </div>
        <div class="mySlides">
            <img src="slideshow2.jpg" alt="Slide 2">
        </div>
        <div class="mySlides">
            <img src="slideshow3.jpeg" alt="Slide 3">
        </div>
        <div class="mySlides">
            <img src="slideshow4.jpg" alt="Slide 4">
        </div>

        <section>
            <h2 style="text-align:center">Welcome to ICPC</h2>
            <p>Explore the world of competitive programming with ICPC. Join the best minds in the world and compete in challenging programming contests.</p>

            <h2 style="text-align:center">Regional Instructions</h2>
            <div class="instruction-buttons">
                <a href="contestant instructions.html" class="instruction-button">Contestant</a>

                <a href="volunteer instructions.html" class="instruction-button">Volunteer</a>
            </div>
	</section>
    </div>

    <div id="about-icpc">
        <h2>About ICPC</h2>
        <p>The International Collegiate Programming Contest is an algorithmic programming contest for college students. Teams of three, representing their university, work to solve the most real-world problems, fostering collaboration, creativity, innovation, and the ability to perform under pressure. Through training and competition, teams challenge each other to raise the bar on the possible. Quite simply, it is the oldest, largest, and most prestigious programming contest in the world.</p>
    </div>

    <div id="icpc-stats">
        <h2>More than <b>50,000</b> students worldwide per year</h2>
        <h2>More than <b>3,000</b> universities in 111 countries</h2>
        <h2>Over <b>400</b> on-site competitions</h2>
    </div>

    <div id="about-icpc">
        <h2>Regionals:<br>
Developing global opportunity starts locally</h2>
        <p>Each year, the ICPC regionals begin at local competitions among classmates to determine who may represent their university. Success at one level leads to an invitation to the next. Each region progresses differently, but the end result is the same, the best teams advance. The final regional contest determines the teams advancing to the World Finals.</p>
	<a href="region selector.html" class="custom-button">Region Finder</a>
	<a href="region.php" class="custom-button">Upcoming Regionals</a>
	<a href="chart.php" class="custom-button">Regional Results</a>
	<a href="regional rules.html" class="custom-button">Regional Rules</a>
    </div>

    <div class="line-separator"></div>

    <div id="about-icpc">
        <h2>World Finals:<br>
Shining a spotlight
on the best of the best of the best</h2>
        <p>The top teams from each regional contest from six different continents come together to compete by conquering the world's most challenging problem set. The goal is to earn the ultimate honor of being the best of the best problem solvers on the planet, the ICPC World Champions.</p>
	<a href="schedule.php" class="custom-button">Schedule</a>
	<a href="teams1.php" class="custom-button">Teams</a>

	<a href="https://icpc.global/worldfinals/problems/icpc2021.pdf" class="custom-button">World Finals Problems</a>
	<a href="world finals rules.html" class="custom-button">World Finals Rules</a>

    </div>

    <div class="line-separator"></div>

    <div id="about-icpc">
        <h2>Community:<br>
Binding the strength of advocates worldwide</h2>
        <p>The ICPC is filled with many people who dedicate their lives to improving the future of computing by enabling opportunities for students. Universities, coaches and volunteers work together to enable opportunities for our competitors to shine.</p>
	<a href="https://tools.icpc.global/" class="custom-button">ICPC Tools</a>
	<a href="https://u.icpc.global/" class="custom-button">ICPC University</a>
	<a href="https://icpc.foundation/" class="custom-button">ICPC Foundation</a>
    </div>

    <footer>
        &copy; 2023 ICPC. All rights reserved.
    </footer>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000);
        }
    </script>

</body>

</html>
