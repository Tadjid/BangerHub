<?php
$FileName = $_FILES['upload']['name'];
$TmpName = $_FILES['upload']['tmp_name'];
move_uploaded_file($TmpName, $FileName);
echo ("Opération terminée");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Envoyer votre morceau</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles-send_your_track.php" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="login">
        <form method="POST" action="" enctype="multipart/form-data">
            <h1>Envoyer votre morceau</h1>
            <div class="champs">
                <input type="file" name="upload" id="upload">
            </div>
            <!-- <div class="notification">
                <p>Nous vous enverrons un mail quand notre équipe aura écouté votre morceau. </p>
            </div> -->
            <div class="send-button">
                <input type="submit" value="Envoyer">
            </div>

        </form>

    </div>

</body>

</html>