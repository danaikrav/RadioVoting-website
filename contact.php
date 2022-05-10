<?php
if(session_id() == "") session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="css/Contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-CE Web Radio</title>


</head>

<body>
    <div class="header-container">
        <a href="home.php" class="">Home</a>
        <a href="about.php"> About</a>
        <a href="#">Contact</a>
        <? if (@$_SESSION['admin'] == true) { ?>
         <a href="registersong.php" class="">Add Songs</a>
        <? }?>
        <? if (@$_SESSION['user']) { ?>
         <a href="vote.php" class="">Vote</a>
         <a href="home.php?logout=1">Logout</a>
        <? } else { ?>
         <a href="login.php">Login</a>
        <? }?>   
    </div> 

     
    <img class="radio-image" src="photos/radio.jpg" alt="Radio image">

    <br>
   <br>
    <div id="row" class="clearfix">
            
        <div id="cell2">
            <div class="pad2"></div>
            <br>
                <h2></h2>
            <div class="pad2"></div>
        </div>

        <div id="cell3" class="pad">
            <br>
            <br>
            <form action='home.php' method='post' class="contact-login">
            <div class="pad3">
            <div class="pad4">
            <br>
            <br>
            <h2>CONTACT US! </h2>
            <div class="pad2"></div>
            <div class="pad2"></div>
            <div class="pad2"></div>
            <div class="pad6">
                <div id="inputs">
                    <input type="text" id="na" name="nam" size="23" value="Your name">
                </div>
                <br>
                <div id="inputs">
                    <input type="text" id="em" name="ema" size="23" value="Email">
                </div>
                <br>
                <div id="inputs">
                <textarea id="bo" name="boo" value="" rows="5" cols="25"> Message... </textarea>
                </div> 
                <br>
                <div id="labels" style="color: gray">
                    <label for="dest"> I am not a robot</label><label class="contain">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <br>
                <div class="pad2"></div>
                <button class="button">SEND</button>
            </div>
            </div>    
            </div>
            </form>
        </div>

        <div id="cell4">
            <br>
            <br>
            <br>
            <br>
            <div class="rotation"> 
                <div class="mySlides fade">
                    <br>
                    <div clas="pad5">
                    <img src="image/musica.jpg" width="600" height="400">
                    <br>
                    <br>
                        <h2>DO YOU LOVE LISTENING TO MUSIC?</h2>
                        <br>
                        <p> Can you tell us why </p>
                        </div>
                </div>  

                <div class="mySlides fade">
                    <br>
                    <div clas="pad5">
                    <img src="image/bearmusic.jpg" width="600" height="400">
                    <br>
                    <br>
                        <h2>WHAT IS MUSIC?</h2>
                        <br>
                        <p> "Where words fail, music speaks."</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <br>
                    <div clas="pad5">
                    <img src="image/music.jpg" width="600" height="400">
                    <br>
                    <br>
                        <h2>LA LA LA</h2>
                        <br>
                        <p>  "You are what you listen to" </p>
                    </div>
                </div>
            </div>


            <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            </div>

                            <script>
                            var slideIndex = 0;
                            showSlides();

                            function showSlides() {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";  
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) {slideIndex = 1}    
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex-1].style.display = "block";  
                            dots[slideIndex-1].className += " active";
                            setTimeout(showSlides, 15000); // Change image every 25 seconds
                            }
                            </script>

        </div>

    </div>

    <div class="footer-container">
        <br>
        <div class="foopos">
            <footer>
                <br>
                <br>
                    <a href="https://pt-pt.facebook.com"><img src="image/faceicon.png" width="50" height="50"></a>
                    <a href="https://pt-pt.facebook.com"><img src="image/iconin.png" width="50" height="50"></a>
                    <a href="https://pt-pt.facebook.com"><img src="image/icontwitter.png" width="50" height="50"></a>
                    <a href="https://pt-pt.facebook.com"><img src="image/icongoo.png" width="50" height="50"></a>
                    <a href="https://pt-pt.facebook.com"><img src="image/iconspotify.png" width="50" height="50"></a>
                    <p style="color: white">&copy; ece Web Radio 2021 - LISTEN WITH US</p>
                    <br>
                    <br>
                    <b><p> | (+30) 900 000 000 </p>
                    <p> | UTH </p>
                    <p> | radioecedesign@outlook.com</p>
                    </b>
                 <br>
            </footer>
        </div>
        </div>
    <br>      
</body>

</html>
