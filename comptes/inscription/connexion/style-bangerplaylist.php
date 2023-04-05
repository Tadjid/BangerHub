<?php
header('Content-type: text/css; charset:UTF-8')
    ?>

body {
font-family: 'Poppins', sans-serif;
}

.playlist {
display: flex;
flex-direction: row;
flex-wrap: wrap;
justify-content: center;
gap: 40px;
margin: 40px;
margin-top: 110px;
}

.playlist p {
font-weight: bold;
}

.couverture img {
<!-- border-radius: 5px; -->
}

.couverture img:hover {
filter: brightness(70%);
transition: 0.3s;
}

span {
color: black !important;
font-size: 15px;
}

.black {
width: 100vw;
height: 130px;
background-color: black;
}

.black img {
float:left;
}

.pseudo {
position: absolute;
text-align: center;
margin-top: 35px;
margin-left: 85%;
color: white;
font-weight: bold;
}

.pseudo i {
border: solid 1px rgb(255, 255, 255);
border-radius: 50px;
padding: 10px 12px;
text-align: center;
font-size: 25px;
}

.deconnexion{
margin-left: 80%;
padding-top : 40px;
}


.deconnexion a{
color: white;
border: solid 1px;
padding: 10px 12px;
position: absolute;
}

.deconnexion a:hover {
transition: 0.3s;
background-color: white;
color: black;
}

<!-- #aplayer {
position: fixed;
bottom: 0;
width: 100%;
margin: 0;

} -->

<!-- .social-media {
position: absolute;
display: flex;
justify-content:
}


.social-media ul {
display: flex;
flex-direction: row;
flex-wrap: wrap;
list-style-type: none;
margin-bottom: 0px;
}

.social-media ul li {
font-size: 20px;
padding: 10px 20px;
} -->

@media screen and (max-width:1366px) {
.pseudo {
margin-left: 75%;
}

.deconnexion{
margin-left: 65%;
padding-top : 40px;
}
}