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
    <title>Playlist</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="style-bangerplaylist.php" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">




</head>
<style>

</style>

<body>

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
    <div class="enveloppe">
        <div class="contenu">
            <div class="playlist-col">
                <div class="latest-tracks">
                    <h1>Titres récents</h1>
                </div>
                <div class="playlist">
                    <div class="music-1">
                        <a href="javascript:void();" class="couverture" data-switch="0">
                            <img src="bangerhub/image/virtual world.jpg" height="350px">
                        </a>
                        <p>Tadjid - Virtual World</p>

                    </div>
                    <div class="music-1">
                        <a href="#" class="couverture" data-switch="1">
                            <img src="bangerhub/image/good mood.png" height="350px">
                        </a>
                        <p>Tadjid - Good mood</p>

                    </div>
                    <div class="music-1">
                        <a href="#" class="couverture" data-switch="2">
                            <img src="bangerhub/image/all night" height="350px">
                        </a>
                        <p>Tadjid - All night</p>

                    </div>
                    <div class="music-1">
                        <a href="#" class="couverture" data-switch="3">
                            <img src="bangerhub/image/stars.jpg" height="350px">
                        </a>
                        <p>Tadjid - Stars</p>

                    </div>
                </div>
            </div>
        </div>

        <div id="aplayer"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script>

            $(".couverture").on('click', function (e) {
                var dataSwitchId = $(this).attr('data-switch');
                console.log(dataSwitchId);
                ap.list.switch(dataSwitchId);
                ap.play();
                $("#aplayer").addClass('showPlayer');
            });

            const ap = new APlayer({
                container: document.getElementById('aplayer'),
                listFolded: true,
                audio: [
                    {
                        name: 'Virtual World',
                        artist: 'Tadjid',
                        url: 'music/virtual world',
                        cover: 'bangerhub/image/virtual world.jpg',
                    },

                    {
                        name: 'Good mood',
                        artist: 'Tadjid',
                        url: 'music/Good mood.mp3',
                        cover: 'bangerhub/image/good mood.png',
                    },

                    {
                        name: 'All night',
                        artist: 'Tadjid',
                        url: 'music/All night',
                        cover: 'bangerhub/image/all night',
                    },

                    {
                        name: 'Stars',
                        artist: 'Tadjid',
                        url: 'music/nostalgia.mp3',
                        cover: 'bangerhub/image/stars.jpg',
                    },
                ]
            });
        </script>
</body>