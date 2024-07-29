<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Website in HTML CSS</title>
    <link rel="stylesheet" href="icpcmainoriginal.css" />
    <script src="../custom-scripts.js" defer></script>
    
  </head>
  <body >
    <main>
      <!-- Header Start -->
      <header>
        <nav class="nav container">
          <h2 class="nav_logo"></h2>
          <a href="#" class="nav_logo">
            <img src="GreaterNY-removebg-preview.png" width="250" height="180"  >
          </a>
          <ul class="menu_items">
            <img src="images/times.svg" alt="timesicon" id="menu_toggle" />
            <li><a href="underhome.html" class="nav_link">Home</a></li>
            <li><a href="icpcabout.php" class="nav_link">About</a></li>
            <li><a href="jithu.php" class="nav_link">Result</a></li>
            <li><a href="charts.php" class="nav_link">Participation</a></li>
            
          
        </nav>

      </header>
      
      <!-- Header End -->
      <!-- Hero Start -->
      <section class="hero">
        <div class="row container">
          <div class="column">
            <div class="text-container">
              <h2>About ICPC</h2>
              <p>The International Collegiate Programming Contest is an algorithmic programming contest for college students. Teams of three, representing their university, work to solve the most real-world problems, fostering collaboration, creativity, innovation, and the ability to perform under pressure. Through training and competition, teams challenge each other to raise the bar on the possible. Quite simply, it is the oldest, largest, and most prestigious programming contest in the world.</p>
              <div class="buttons">
                <a href="http://icpc.global/"><button class="btn">Read More</button></a>
              </div>
            </div>
          </div> 
        </div>
      </section>
      <!-- Hero End-->
    </main>
    <script>
      const header = document.querySelector("header");
      const menuToggler = document.querySelectorAll("#menu_toggle");
      menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
      });
    </script>
  </body>
</html>