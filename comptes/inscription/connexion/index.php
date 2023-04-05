<?php
session_start();
if (!$_SESSION['mdp']) {
  header('Location: connexion');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>Accueil</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" type="text/css" href="styles.php" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="enveloppe">
    <header>
      <div class="banniere">
        <div class="banniere-content"></div>
        <!-- <nav> -->
        <!-- <ul> -->
        <!-- <li> -->
        <!-- <a href="https://www.youtube.com/channel/UCdtru0h_-hnOLODiKUtHmHQ" target="_blank">
              <img src="image/youtube_logo.png" height="25px" /></a>
          </li>
          <li>
            <a href="index.html" target="_blank">
              <img src="image/instagram_logo.png" height="25px" /></a>
          </li>
          <li>
            <a href="index.html" target="_blank">
              <img src="image/twitter_logo.png" height="32px" /></a>
          </li>
        </ul> -->
        <!-- </nav> -->
        <div class="black">
          <img src="image/BangerHub-logo-white.png" height="130px" alt="" />
          <div class="pseudo">
            <i class="fa-solid fa-user"></i>
            <br>
            <?php
            echo $_SESSION['pseudo'];

            ?>
          </div>
          <div class="deconnexion">
            <a href="deconnexion.php" style="text-decoration: none">Se déconnecter</a>
          </div>
        </div>

      </div>
    </header>
    <div class="fondecran">
      <div class="logo">
        <p>
          <span>Vous aimez la musique électronique ? Alors vous êtes au bon endroit !</span>
        </p>
      </div>
    </div>
    <div class="playlist-link">
      <a href="bangerplaylist.php" target="_blank">
        <p><i class="fa-solid fa-headphones"></i> Playlist</p>
      </a>
    </div>
    <!-- <div class="merch-link">
      <a href="#" target="_blank">
        <p><i class="fa-sharp fa-solid fa-bag-shopping"></i> Boutique</p>
      </a>
    </div> -->

    <div class="contact-link">
      <a href="mailto: bangerhub.contact@gmail.com">
        <p><i class="fa-solid fa-envelope"></i> Contact </p>
      </a>
    </div>
  </div>
  <div class="about-1">
    <h2>
      <i class="fa fa-circle-info"></i> A propos :
    </h2>
    <p>
      BangerHub est un label de musique électronique promouvant des
      artistes (chanteur, compositeur) <br />Les titres promus sont
      disponibles dans notre
      <a href="bangerplaylist.php" target="_blank">playlist</a> et sur
      notre chaîne
      <a href="https://www.youtube.com/channel/UCdtru0h_-hnOLODiKUtHmHQ" target="_blank">YouTube</a>.
    </p>
    <h2><i class="fa-solid fa-envelope"></i> Contact :</h2>
    <p>Contactez-nous si vous souhaitez que votre morceau figure dans notre <a href="bangerplaylist.php"
        target="_blank">playlist</a> et notre chaîne <a href="https://www.youtube.com/channel/UCdtru0h_-hnOLODiKUtHmHQ"
        target="_blank">YouTube</a>.
    </p>

    <div class="social-media">
      <p>Suivez-nous sur :</p>
      <ul>
        <li>
          <a href="https://www.youtube.com/channel/UCdtru0h_-hnOLODiKUtHmHQ" target="_blank" class="youtube"><i
              class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
          <a href="https://twitter.com/TadjidMadi73965" target="_blank" class="twitter"><i
              class="fa-brands fa-twitter"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/bangerhub.music/" target="_blank" class="instagram"><i
              class="fa-brands fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    <!-- <div class="credit">
        <p>Contactez-nous</p>
      </div> -->

  </div>

</body>

</html>