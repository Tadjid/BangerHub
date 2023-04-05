<?php
header('Content-type: text/css; charset:UTF-8')
    ?>

body {
font-family: 'Poppins', sans-serif;
background-color: rgb(218, 218, 218);
}

form {
background-color: white;
padding: 110px 120px;
margin-top: 10%
}

form h1 {
text-align: center;
}

.login {
display: flex;
align-items: center;
justify-content: center;
}

.media {
display: flex;
flex: wrap;
flex-direction: row;
margin-top: -30px
}

.media p i {
padding: 20px 30px;
}

.login form h1 {
font-size: 24px;
}

.notification {
text-align: center;
font-size: 15px;
font-weight: bold;
}


.connexion {
display: flex;
justify-content: center;
align-items: center;
}

.champs {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
gap: 20px;
}

.champs input[type="file"], input[type="submit"] {
background-color: rgb(225, 225, 225);
border: none;
outline: none;
}

.send-button button {
padding: 10px;
outline: none;
border: none;
cursor: pointer;
background-color: rgb(225, 225, 225);
}

.send-button button:hover {
transition: 0.3s;
background-color: black;
color: white;
}