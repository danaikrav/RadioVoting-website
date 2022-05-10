<?php
if(session_id() == "") session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/login.css">
    <title>E-CE Web Radio</title>
</head>

<body>
    <div class="header-container">
        <a href="index.php" class="">Home</a>
        <a href="about.php"> About</a>
        <a href="contact.php">Contact</a>
    </div>

     
        <img class="radio-image" src="photos/radio.jpg" alt="Radio image">

        <div class="login-container">
            
            <form action='home.php' method='post' class="form-login">
                <div class = "login-input-form">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="login-input-buttons">
                    <button type="button" onclick="window.location.href='register.php'" class="createaccount-button">Create Account</button>
                    <input class="login-button" type='submit' value='Login'>
                </div>
            
            </form>


        
    </div>


</body>

</html>
