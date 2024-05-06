<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewpart" content="width=device-width,initialscale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="marathon.css">
    <link rel="stylesheet" href="footer.css">
    <script src="slider.js"></script>
<title>Marathon Run For Life</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo"><img src="logo1.png" alt="logo" class="logo1"></div>
      <div class="nav-links">
        <ul>
          <li ><a href="marathon.html">Home<i class="fas fa-caret-down"></i></a>
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
    <div class="slider">
      <div id="precedent" onclick="ChangeSlide(-1)"><</div>
        <div id="suivant" onclick="ChangeSlide(1)">></div>
      <img src="./image-acceuil.jpg" alt="image-acceuil" class="image" id="slide"/>
    
    </div>
    <script>
      const menuHamburger = document.querySelector(".menu-hamburger")
      const navLinks = document.querySelector(".nav-links")

      menuHamburger.addEventListener('click',()=>{
      navLinks.classList.toggle('mobile-menu')
      })
</script>
 <!-- les parcours -->
 <section id="section-parcours">
  <div class="parcour1-2-3">
    <h2>Nos parcours</h2>
<div class="rectangle" id="rectangle">
  <div class="parcours"><a href="loc1.html">Parcour1</a></div>
  <div class="distance" id="distance1">0 km</div>
  <div class="inscription"><a href="formulaire inscription5.php">Inscription</a></div>
</div>
<div class="rectangle">
  <div class="parcours"><a href="./loc2.html">Parcours 2</a></div>
  <div class="distance" id="distance2">0 km</div>
  <div class="inscription"><a href="formulaire inscription22.php">Inscription</a></div>
</div>
<div class="rectangle">
  <div class="parcours"><a href="./loc3.html">Parcours 3</a></div>
  <div class="distance" id="distance3">0 km</div>
  <div class="inscription"><a href="formulaire inscription42.php">Inscription</a></div>
</div>
</div>
</section>


<script>
  function incrementDistance(elementId, distance) {
      let element = document.getElementById(elementId);
      let currentDistance = 0;

      const interval = setInterval(() => {
          if (currentDistance >= distance) {
              clearInterval(interval);
          } else {
              currentDistance++;
              element.textContent = currentDistance + " km";
          }
      }, 40);
  }

  incrementDistance("distance1", 5);
  incrementDistance("distance2", 22);
  incrementDistance("distance3", 42);
</script>
<!----------------------- programme ------------------>
<section id="section-programme"></section>
<div class="container3">
  <div class="steps">
    <h2 class="title">Le programme</h2>
    <div class="step" onclick="showStep(1)">
      <strong>Étape 1:</strong> 7h00 regroupement des coureurs
    </div>
    <div class="step" onclick="showStep(2)">
      <strong>Étape 2:</strong> 8h00 échauffement
    </div>
    <div class="step" onclick="showStep(3)">
      <strong>Étape 3:</strong> 9h00 départ marathon 5km
    </div>
    <div class="step" onclick="showStep(4)">
      <strong>Étape 4:</strong> 9h30 départ marathon 22km
    </div>
    <div class="step" onclick="showStep(5)">
      <strong>Étape 5:</strong> 10h30 départ marathon 42km
    </div>
    <div class="step" onclick="showStep(6)">
      <strong>Étape 6:</strong> 12h00 remise des prix et clôture de l'événement
    </div>
  </div>

  <div class="images">
    <img id="image2" src="run.jpg" alt="Marathon Image 2">
  </div>
</div>
 <!-- Historique -->
 <section id="section-historique">

  <div class="hist">
  <h1 class="title">Historique du marathon</h1>
  <div class="content">
    <div class="text">
      <p>16 novembre 2014 - Le marathon "Run for Life" créé par<br> le Jeune Chambre Internationale de Hammam Sousse pour<br> encourager les jeunes à pratiquer le sport.</p>
    </div>
    <div class="imagehist">
      <img   src="image-acceuil.png" alt="Image du marathon" width=" 600px" >
    </div>
  </div>
</div>
</section>

<!-- partenaire -->
<section id="section-Partenaires">

<div class="partners-section">
  <h2 class="section-title">Nos partenaires</h2>
  <div class="partners-container">
    <div class="partners-logos" id="partnersLogos">
      <img src="hammam sousse.png" alt="Logo partenaire 1">
<img src="croissant.png" alt="Logo partenaire 2">
<img src="derbigum.png" alt="Logo partenaire 3">
<img src="knooz fm.png" alt="Logo partenaire 1">
<img src="sahel.png" alt="Logo partenaire 2">
<img src="talel.png" alt="Logo partenaire 3">
<img src="warda.png" alt="Logo partenaire 1">
<img src="music africa.png" alt="Logo partenaire 2">
<img src="city market.png" alt="Logo partenaire 1">


<img src="hammam sousse.png" alt="Logo partenaire 1">
<img src="croissant.png" alt="Logo partenaire 2">
<img src="derbigum.png" alt="Logo partenaire 3">
<img src="knooz fm.png" alt="Logo partenaire 1">
<img src="sahel.png" alt="Logo partenaire 2">
<img src="talel.png" alt="Logo partenaire 3">
<img src="warda.png" alt="Logo partenaire 1">
<img src="music africa.png" alt="Logo partenaire 2">
<img src="city market.png" alt="Logo partenaire 1">




<img src="hammam sousse.png" alt="Logo partenaire 1">
<img src="croissant.png" alt="Logo partenaire 2">
<img src="derbigum.png" alt="Logo partenaire 3">
<img src="knooz fm.png" alt="Logo partenaire 1">
<img src="sahel.png" alt="Logo partenaire 2">
<img src="talel.png" alt="Logo partenaire 3">
<img src="warda.png" alt="Logo partenaire 1">
<img src="music africa.png" alt="Logo partenaire 2">
<img src="city market.png" alt="Logo partenaire 1">
    </div>
  </div>
</div>
</section>
<link rel="stylesheet" type="text/css" href="partenaire.css">

<script>
  // Liste des logos des partenaires
  var partnerLogos = [
    'hammam sousse.png',
    'croissant.png',
    'derbigum.png',
    'knooz fm.png',
    'sahel.png',
    'talel.png',
    'warda.png',
    'music africa.png',
    'city market.png'
  ];

  // Fonction pour ajouter les logos
  function addLogos() {
    var partnersLogos = document.getElementById('partnersLogos');

    partnerLogos.forEach(function (logo, index) {
      var img = document.createElement('img');
      img.src = logo;
      img.alt = 'Logo partenaire ' + (index + 1);

      partnersLogos.appendChild(img);
    });
  }

  // Appeler la fonction au chargement de la page
  window.onload = function () {
    addLogos();
    startAnimation();
  };

  // Animation des logos
  function startAnimation() {
    var partnersLogos = document.getElementById('partnersLogos');
    var logos = partnersLogos.getElementsByTagName('img');

    var interval;
    var currentIndex = 0;
    var animationCount = 0;

    function animateLogo() {
      var logo = logos[currentIndex];
      logo.style.transform = 'translateX(100%)'; // Translation vers la droite
      logo.style.transition = 'transform 2s linear'; // Ajouter une transition

      setTimeout(function () {
        logo.style.transform = 'translateX(-100%)'; // Translation vers la gauche
        currentIndex++;

        if (currentIndex === logos.length) {
          currentIndex = 0;
          animationCount++;

          if (animationCount === 8 ){
            clearInterval(interval); // Arrêter l'animation après 8 répétitions
          }
        }
      }, 2000);
    }

    animateLogo(); // Lancer la première animation

    interval = setInterval(animateLogo, 4000); // Répéter l'animation toutes les 4 secondes
  }
</script>
 <!-- maps -->
 <section id="section-position"></section>
 <div class="map">
<h2 style="text-align: center;">our location on google maps</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29235.209675678834!2d10.599510048525929!3d35.861709824631674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8a40325cdae5%3A0x7a33004f92fd30ea!2sMunicipalit%C3%A9%20Hammam%20Sousse!5e0!3m2!1sar!2stn!4v1683971746951!5m2!1sar!2stn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- partie footer -->
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
          <form method="post" action="marathon.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="nom" required>
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
$servername = "localhost";
$username = "marathon";
$password = "marathon2023";
$dbname = "marathon";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $stmt = $conn->prepare("INSERT INTO contactez_nous (Username, Email, Message) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $email, $message]);

        echo "New record inserted successfully";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>