<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=inscription_;', 'root', '');
if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));
        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: index.php');
        } else {
            echo "Votre pseudo ou mot de passe est incorrect.";
        }
    } else {
        echo "Vous devez compléter tous les champs pour vous connecter.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles-connexion.php" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="login">
        <form method="POST" action="">
            <h1>Se connecter</h1>
            <div class="media">
                <a href="https://www.youtube.com/@djr7761/featured" target="_blank"><i class="fab fa-youtube"></i></a>

                <a href="https://twitter.com/TadjidMadi73965" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/bangerhub.music/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
            </div>
            <div class="champs">
                <input type="text" name="pseudo" placeholder="Nom d'utilisateur" autocomplete="off">
                <!-- <br> -->
                <input type="password" name="mdp" placeholder="Mot de passe" autocomplete="off">
                <!-- <br><br> -->
                <!-- <input type="submit" name="envoi" placeholder="Se connecter"> -->
            </div>
            <div class="inscription">
                <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous !</a></p>
            </div>
            <div class="connexion">
                <button type="submit" name="envoi">Se connecter</button>
            </div>

        </form>

    </div>

</body>

</html>