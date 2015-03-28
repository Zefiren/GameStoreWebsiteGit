<?php
//display all errors
error_reporting(E_ALL); 
ini_set('display_errors', 1);
//start session 
session_start();
//store username and password into session variables for later
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Games, Anton, university">
    <meta name="author" content="Grzegorz Goral, Anton Gashi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <title>AG Game Store</title>
    <style>
        * {
            height: auto;
            margin: 0px;
            padding: 0px;
        }
        
        body{
            background-color: #00005C
        }
        
        #centre {
            background-image: url(images/background.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-color: #FF00FF;
            background-blend-mode: multiply;
            margin-left: auto;
            margin-right: auto;
            width: 55%;
            height: 1080px;
            background-size: 100% 200%;
            font-size: 1em;
        }
        
        #background {
            background-image: url(images/2014-06-Mortal-Kombat-X-Cover-Game-2014-Wide-1600x1000.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        
        header {
            background-color: #00005C;
            padding: 0;
            margin-bottom: 0px;
            border-bottom: 2px solid #aaaaaa;
        }
        
        header img {
            width: 15%;
            padding-left: 2%;
        }
        
        #primaryWrapper {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        
        #primaryWrapper nav {
            margin-left: auto;
            margin-right: auto;
        }
        /*

    header nav ul li {
        float: left;
        padding: 7px;
        padding-left: 0.5px;
        padding-right: 0.5px;
        padding-bottom: 0;
        box-sizing: border-box;
        display: block;
        border-left: 1px solid #555555;
        border-right: 1px solid #555555;
    }
*/
        
        nav {
            margin-top: 0;
            margin-bottom: 0;
        }
        
        nav ul li a {
            font-size: 1em;
            font-size: 1.5vw;
            display: block;
            color: #A1A1A1;
            text-decoration: none;
            text-align: center;
        }
        /*
    nav ul li:hover,
    nav ul li a.active {
        background-color: #0000AC;
        color: #ffffff;
    }
*/
        
        #showcase figcaption {
            font-size: 30px;
            font-size: 2.0vw;
            text-align: center;
            /*                        padding-bottom: 20px;*/
        }
        
        #showcase h4 {
            font-size: 30px;
            font-size: 2.5vw;
            text-align: center;
            /*                        padding-bottom: 20px;*/
        }
        
        #showcase {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        
        #showcase figure {
            padding-bottom: 5%;
        }
        
        #row1 {
            color: #ffffff;
            padding: 10px;
            height: 300px;
        }
        
        #row1 figure {
            width: 100%;
            height: 100%;
            caption-side: bottom;
        }
        
        #row1 img {
            width: 100%;
            height: 100%;
        }
        
        #left {
            float: left;
            width: 64%;
            height: 100%;
            padding-right: 10px;
        }
        
        #right {
            float: right;
            width: 34%;
            height: 100%;
            padding-left: 10px;
        }
        
        #row2 {
            color: #ffffff;
            width: 100%;
            height: 300px;
            padding: 10px;
            margin-left: auto;
            margin-right: auto;
        }
        
        #row2 figure {
            width: 100%;
            height: 100%;
            caption-side: bottom;
        }
        
        #row2 figure img {
            width: 100%;
            height: 100%;
            caption-side: bottom;
        }
        
        #row3 {
            color: #ffffff;
            width: 100%;
            height: 300px;
            padding: 10px;
            /*            margin-left: auto;*/
            /*            margin-right: auto;*/
        }
        
        #row3 figure {
            /*            width: 100%;*/
            
            height: 100%;
            caption-side: bottom;
        }
        
        #row3 figure img {
            width: 100%;
            height: 100%;
        }
        
        #r3left {
            float: left;
            width: 25%;
            height: 100%;
            margin-right: 10%;
        }
        
        #r3middle {
            float: left;
            width: 25%;
            height: 100%;
            margin-left: 2%;
            margin-right: 2%;
        }
        
        #r3right {
            float: right;
            width: 25%;
            height: 100%;
            margin-left: 10%;
        }
        
        .nav-tabs {
            border-bottom: 0px solid #ddd;
        }
        
        
        .nav-tabs>li>a{
            border-radius: 0;
        }
        
        footer {
            margin-left: auto;
            margin-right: auto;
            width: 55%;
            background-color: #00005C;
            background-attachment: fixed;
        }
        footer nav ul li{
            width: 25%;
        }
        
    </style>
</head>



<header>
    <a href="Homepage.html"><img id="logo" src="images/logo.png">
    </a>
    <div id="primaryWrapper">
        <nav>
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li><a href=#>PS4</a>
                </li>
                <li><a href=#>XBOX ONE</a>
                </li>
                <li><a href=#>PS3</a>
                </li>
                <li><a href=#>XBOX 360</a>
                </li>
                <li><a href=#>PC</a>
                </li>
                <li><a href=#>NINTENDO</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<body>

    <div id="background">
        <div id="centre">
            <div id="showcase">
                <div id="row1">
                    <div id="left">
                        <figure>
                            <a href="#1"><img src="gamescovers/download(1).jpg">
                            </a>
                            <figcaption>Popular Titles</figcaption>
                        </figure>
                    </div>
                    <div id="right">
                        <figure>
                            <a href="#1"><img src="gamescovers/download(2).jpg">
                            </a>
                            <figcaption>Most Popular</figcaption>
                        </figure>
                    </div>
                </div>
                <br>
                <div id="row2">
                    <figure>
                        <a href="#1"><img src="gamescovers/download(3).jpg">
                        </a>
                        <figcaption>Coming Soon</figcaption>
                    </figure>
                </div>
                <div id="row3">
                    <div id="r3left">
                        <figure>
                            <a href="#1"><img src="gamescovers/download(4).jpg">
                            </a>
                        </figure>
                    </div>
                    <div id="r3middle">
                        <figure>
                            <a href="#1"><img src="gamescovers/download(7).jpg">
                            </a>
                        </figure>

                    </div>
                    <div id="r3right">
                        <figure>
                            <a href="#1"><img src="gamescovers/download(6).jpg">
                            </a>
                        </figure>

                    </div>
                    <h4>Currently Popular</h4>
                </div>
            </div>


        </div>

    </div>

</body>
<footer>

    <nav>
        <ul class="nav nav-tabs " role="tablist">
            <li><a href=#>About Us</a>
            </li>
            <li><a href=#>Support</a>
            </li>
            <li><a href=#>Contact Us</a>
            </li>
            <li><a href=#>My Account</a>
            </li>
        </ul>
    </nav>

</footer>

</html>