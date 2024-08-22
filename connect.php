<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "campbellyinka@gmail.com";

mail($recipient, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Yinka Campbell</title>

    <link rel="stylesheet" href="./styles/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600&family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    

</head>

<body>
    
    <div id="wrapper">

          <header>

            <p class="tracking-in-expand"><a href="./index.html">adeyinka</a></p>



            <!--navigation-->

            <nav aria-label="website" id="nav">

                <ul>
                    <li><a href="./projects.html">Projects</a></li>
                    <li><a href="./about.html">About me</a></li>
                    <li><a href="./contact.html">Hire me</a></li>
               </ul>

            </nav>
          </header>

        <!--About header-->

        <div class="about-header">
            <p>Love to hear from you</p>
            <h1 class="tracking-in-expand">Hire Me.</h1>
            <img src="./images/arrow.png" width="69" height="69">
        </div>


        <div class="project-welcome">
            <span class="tracking-in-expand">Thank you for contacting me</span>
            <p>I will get back to you as soon as possible</p>
            <p>Go back to the <a href='./index.html'>Homepage</a></p>

        </div>


        <footer>
            <div class="footer-info">
                <p>adeyinka</p>
                <img src="./images/LinkedIn.png" alt="linkedin-logo" width="90" height="90">
                <img src="./images/Behance.png" alt="behance-logo" width="90" height="90">
            </div>

            <p class="copyright">Designed by Adeyinka Campbell. All rights reserved. &#169;2024 </p>
        </footer>





    </div>


    
</body>
</html>

';

 







?>