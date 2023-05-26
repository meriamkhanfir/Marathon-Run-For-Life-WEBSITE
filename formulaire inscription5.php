<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewpart" content="width=device-width,initialscale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="marathon.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="inscri.css">
  <title>Dons pour un Marathon</title>
 
</head>
<body>
  <nav class="navbar">
    <div class="logo"><img src="logo1.png" alt="logo" class="logo1"></div>
    <div class="nav-links">
      <ul>
        <li ><a href="marathon.php">Home<i class="fas fa-caret-down"></i></a>
        <div class="dropdown-menu">
          <ul>
          <li><a href="pj1.html">Présentation</a></li>
              <li><a href="page2.html">Objectifs</a></li>
              <li><a href="formorganizateur.php">Organisateurs</a></li>
              <li><a href="formdons.php">Dons</a></li>
              <li><a href="page3.html">Marathon en TUNISIE</a></li>
          </ul>
        </div>
        </li>
        <li ><a href="#">Marathon Run For Life<i class="fas fa-caret-down"></i></a>
          <div class="dropdown-menu2">
          <ul>
            <li><a href="pj1.html">Présentation</a></li>
            <li><a href="page2.html">Objectifs</a></li>
      
            <li><a href="formorganizateur.html">Organisateurs</a></li>
            <li><a href="formdons.html">Dons</a></li>
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
  
  
  <div class="container4">
    <img src="iminscri.png" alt="just legs" >
    <h2>Inscription parcour <br> 5 Km</h2>
    <form class="formdon2" action="formulaire inscription5.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>
      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" required>
      <label for="Age">Age :</label>
      <input type="text" id="Age" name="Age" required>
      <label for="telephone">Numéro de Téléphone :</label>
      <input type="text" id="telephone" name="telephone" required>
      <label for="email">Adresse Email :</label>
      <input type="email" id="email" name="email" required>
      <label for="pays">Pays :</label>
      <input type="text" id="pays" name="pays" required>
      <label for="ville">ville :</label>
      <input type="text" id="ville" name="ville" required>
      <label for="message">Message :</label>
      <textarea id="message" name="message"></textarea>
      <input type="submit" value="submit">
    </form>
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
</body>
</html>
<?php
/*echo "hello world";
echo "<a href='WebProject.html'>back</a>";*/
$conn = mysqli_connect('localhost', 'marathon', 'marathon2023', 'marathon');
if (!$conn) {
    echo 'connection error' . mysqli_connect_error();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $pays = $_POST['pays'];
    $ville = $_POST['ville'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO inscription5 (Nom,Prenom ,Age,Telephone,Email,Pays,Ville,Message) VALUES ('$nom', '$prenom',  '$age','$telephone','$email','$pays','$ville','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "New record inserted successfully";
    } else {
        echo "Insertion error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

