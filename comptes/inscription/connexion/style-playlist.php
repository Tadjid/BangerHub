<?php
header('Content-type: text/css; charset:UTF-8')
    ?>

.black {
width: 100vw;
height: 130px;
background-color: black;
top: 0;
display: flex;
}

.black img {
float: left;
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
margin-left: 79%;
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

.latest-track {
text-align: left;
margin: 20px;
}

.cover {
display: flex;
flex-wrap: wrap;
margin: 50px;
gap: 60px;
}

<!-- .cover:hover {
filter:brightness(0.5)
} -->

.about {
margin-top: 10%;
width: 100vw;
height: 4;



background-color: #272727;
}

.about-1 h2{
color: #fff;
line-height: 60px;
/* text-align: left; */
/* margin-left: 3%; */
}

.about-1 p {
color: #fff;
/* text-align: left; */
/* margin-left: 3%; */
font-weight: bold;
}

.about-1 a {
/* text-decoration: none; */
color: #fff;
font-weight: bold;
width: 200px;
}

.about-1 h1 {
/* margin-top: 2%; */
color: #fff;
font-size: 15px;
}

.credit p {
text-align: left;
margin-left: 3%;
font-size: 12px;
}

.social-media {
<!-- position: absolute; -->
display: flex;
justify-content:
}

.social-media p {
text-align: right;
margin-right: 190px;
position: relative;
}

.social-media ul {
display: flex;
flex-direction: row;
flex-wrap: wrap;
margin-left: 80%;
list-style-type: none;
}

.social-media ul li {
font-size: 20px;
padding: 10px 20px;
}

.img-darken {
transition: 0.3s;
filter: brightness(50%);
}

#playbutton {
cursor: pointer;
}

@media screen and (max-width:1366px) {
.pseudo {
margin-left: 75%;
}

.deconnexion{
margin-left: 68%;q
}
}