<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewpart" content="width=device-width,initialscale=1.0">
    <link rel="stylesheet" href="marathon.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="loc1.css">
  <title>Login Page</title>
  <link rel="stylesheet" href="loginpage.css">
</head>
<body>
<nav class="navbar">
    <div class="logo"><img src="logo1.png" alt="logo" class="logo1"></div>
    <div class="nav-links">
      <ul>
        <li ><a href="marathon.php">Home<i class="fas fa-caret-down"></i></a>
        <div class="dropdown-menu">
          <ul>
            <li><a href="#section-parcours">Parcours</a></li>
            
            <li><a href="#section-programme">Programme</a></li>
            <li><a href="#section-historique">Historique</a></li>
            <li><a href="#section-Partenaires">Partenaires</a></li>
            <li><a href="#section-position">position</a></li>
          </ul>
        </div>
        </li>
        <li ><a href="#">Marathon Run For Life<i class="fas fa-caret-down"></i></a>
          <div class="dropdown-menu2">
          <ul>
            <li><a href="pj1.html">Présentation</a></li>
            <li><a href="page2.html">Objectifs</a></li>
            <li><a href="formorganizateur.php">Organisateurs</a></li>
            <li><a href="formdons.php">Dons</a></li>
            <li><a href="page3.html">Marathon en TUNISIE</a></li>
          </ul>
        </div>
        </li>
        </li>
        <li ><a href="historique.html">Edition</a></li>
        <li ><a href="#section-contactez-nous">Contactez-Nous</a></li>
        <li ><a href="loginpage.php">Login</a></li>
        
      </ul>
    </div>
    <img src="./Hamburger_icon.svg.jpg" alt="menuhamburger" class="menu-hamburger"/>
    
  </nav>
  <div class="log1">
  <div class="containerlog">
    <form  action="loginpage.php" method="Post">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Log in</button>
    </form>
  </div>
  </div>
  <footer>
      <section id="section-contactez-nous"></section>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2 class="under">About Us</h2>
              <h3>We are a team of passionate runners who organize the annual Marathon Run for Life event. Our mission is to promote fitness and healthy lifestyle choices while raising funds for charity.</h3>
            </div>
            <div class="col-md-4">
              <h2 class="under">Contact Us</h2>
              <form>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <br>
                <button type="submit">Send</button>
              </form>
            </div>
            <div class="col-md-4">
              <h2 class="under">Contact Info</h2>
              <div class="contact-container">
                <h3><i class="fas fa-envelope"></i> info@marathonrunforlife.com</h3>
                <h3><i class="fas fa-phone"></i> +1 (555) 123-4567</h3>
              </div>
              <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="footer-text">
                <h2>&copy; 2023 Marathon Run for Life. All rights reserved.</h2>
              </div>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
<?php


  // Create a connection
  $conn = mysqli_connect('localhost', 'marathon', 'marathon2023', 'marathon');

  // Check the connection
  if (!$conn) {
    echo 'connection error' . mysqli_connect_error();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "marathon" && $password == "marathon2023") {
      echo '<script>window.location.href = "http://localhost/phpmyadmin/index.php?route=/database/structure&db=marathon";</script>';
      echo '<script>alert("Welcome");</script>';
      exit();
  } else {
        echo "Invalid login credentials";
       
    }
}


mysqli_close($conn);
 

?>



