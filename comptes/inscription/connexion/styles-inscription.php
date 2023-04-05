<?php
header('Content-type: text/css; charset:UTF-8')
    ?>

body {
font-family: 'Poppins', sans-serif;
background-color: rgb(218, 218, 218);
}

form {
background-color: white;
padding: 30px 40px;
border-radius: 50px;
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

.inscription {
text-align: center;
font-size: 9px;
font-weight: bold;
}

.inscription p a {
<!-- text-decoration: none; -->
color: rgb(0, 0, 0);
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

.champs input[type="text"], input[type="password"] {
padding: 10px;
background-color: rgb(225, 225, 225);
border: none;
outline: none;
}

.connexion button {
padding: 10px;
outline: none;
border: none;
cursor: pointer;
background-color: rgb(225, 225, 225);
}

.connexion button:hover {
transition: 0.3s;
background-color: black;
color: white;
}