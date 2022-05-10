<?php
if(session_id() == "") session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="css/About.css">
    <title>E-CE Web Radio</title>

 
</head>

<body>
    <div class="header-container">
        <a href="home.php" class="">Home</a>
        <a href="#"> About</a>
        <a href="contact.php">Contact</a>
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
    <img class="radio-image" src="photos/musica.jpg" alt="Radio image">
                    
                    
                    <div class="cointainer">
                    <center>
                    <br>
                    <br>
                    <br>
                    <span class="effect"><h2 style="color: white" > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; E-CE Web Radio is a voting system for a radio station and each week there will be a list of songs to be voted by users.<br><br>
                    Users can create an account, log in and vote for their favorite song.<br><br>
                    <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; With Web E-CE Radio, it's easier to know the total number of votes or the percentage of votes cast by users - every moment - on your mobile phone, on your computer and much more.</h2></span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        <span class="text1"><p class ="solid" style="color: white; background-color: grey">All votes are anonymous</p><br></span>
                        <br>
                        <span class="text2"><p class ="solid" style="color: white; background-color: grey">No ad interruptions</p><br></span>
                        <br>
                        <span class="text3"><p class ="solid" style="color: white; background-color: grey">Unlimited jumps</p><br></span>
                        <br>
                        <span class="text4"><p class ="solid" style="color: white; background-color: grey">Check out which songs have won in the past few weeks!</p><br>
                    <br></center><br></span>
                    </div>


                    <div class="footer-container">
        <br>
        <div class="foopos">
            <footer>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </footer>
        </div>
</body>

</html>