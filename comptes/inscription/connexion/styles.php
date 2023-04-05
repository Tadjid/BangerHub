<?php
header('Content-type: text/css; charset:UTF-8')
    ?>

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

.social-media {
<!-- position: absolute; -->
display: flex;
justify-content:
}


.social-media ul {
display: flex;
flex-direction: row;
flex-wrap: wrap;
list-style-type: none;
margin-bottom: 10px;

}

.social-media ul li {
font-size: 25px;
padding: 10px 20px;

}

.social-media p {
margin-left: 73px;
text-align: left;

}
nav {
display: flex;
justify-content: space-between;

}

.black {
width: 100vw;
height: 130px;
background-color: black;
}

.black img {
float:left;

}

.logo{
font-size: 50px;
color: #000000;
font-weight: bold;
margin-top: 5%;
}

.playlist-link {
display: flex;
justify-content: center;
}

.playlist-link a {
text-decoration: none;
}

.playlist-link p {
font-size: 25px;
color: #000000;
border: solid 2px rgb(0, 0, 0);
height: 80px;
line-height: 80px;
width: 300px;
/* border-radius: 50px; */
}

.merch-link {
display: flex;
justify-content: center;
}

.merch-link a {
text-decoration: none;
}

.merch-link p {
font-size: 25px;
color: #000000;
border: solid 2px rgb(0, 0, 0);
height: 80px;
line-height: 80px;
width: 300px;
/* border-radius: 50px; */
}

.contact-link {
display: flex;
justify-content: center;
}

.contact-link a {
text-decoration: none;
}

.contact-link p {
font-size: 25px;
color: #000000;
border: solid 2px rgb(0, 0, 0);
height: 80px;
line-height: 80px;
width: 300px;
/* border-radius: 50px; */
}

.contact-link p:hover {
transition: 0.3s;
background-color: #000000;
color: #fff;
<!-- text-decoration : underline; -->
}

.merch-link p:hover {
transition: 0.3s;
background-color: #000000;
color: #fff;
}

.playlist-link p:hover {
transition: 0.3s;
background-color: #000000;
color: #fff;
}

.about {
margin-top: 10%;
width: 100vw;
background-color: #272727;
}

.about-1 h2{
color: black;
line-height: 60px;
/* text-align: left; */
/* margin-left: 3%; */
}

.about-1 p {
color: black;
/* text-align: left; */
/* margin-left: 3%; */
font-weight: bold;
}

.about-1 a {
/* text-decoration: none; */
color: black;
font-weight: bold;
width: 200px;
}

.about-1 h1 {
/* margin-top: 2%; */
color: black;
font-size: 15px;
}

.credit p {
text-align: left;
margin-left: 3%;
font-size: 12px;
}



@media screen and (max-width:1366px) {
.pseudo {
margin-left: 75%;
}

.deconnexion{
margin-left: 65%;
padding-top : 40px;
}
}