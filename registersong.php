<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/registsong.css">
    <title>E-CE Web Radio</title>
</head>

<body>
    <div class="header-container">
        <a href="home.php" class="">Home</a>
        <a href="about.php"> About</a>
        <a href="contact.php">Contact</a>
        <? if (@$_SESSION['admin'] == true) { ?>
         <a href="registersong.php" class="">Add Songs</a>
        <? }?>
        <a href="vote.php" class="">Vote</a>
        <a href="home.php?logout=1">Logout</a>
    </div>
         <img class="radio-image" src="photos/radio.jpg" alt="Radio image">
     <div class="register-main-container">
         
     <div class="register-song-container">
            <form action="do_registersong.php" method='post' class="register-form-container" >
                <label>Song Name</label>
                <input type="text" name='songname' required>

                <label>Artist</label>
                <input type="text" name='artist' required>

                <label>Youtube Link</label>
                <input type="text" name='link' required>

                <input class="regist-button" type='submit' value='Register'>
            </form>
        </div>
    </div>

    
</body>

</html>






