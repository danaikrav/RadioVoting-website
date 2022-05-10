<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/register.css">
    <title>E-CE Web Radio</title>
</head>

<body>
    <div class="header-container">
        <a href="index.php" class="">Home</a>
        <a href="about.html"> About</a>
        <a href="contact.html">Contact</a>
        <a href="login.php">Login</a>
    </div>

    <div class="register-page-container">

        <img class="radio-image" src="photos/radio.jpg" alt="Radio image">x
        <div class="register-container">
            <form action="do_register.php" method='post' class="form-container" >
                <label>First Name:</label>
                <input type="text" name='firstname' required>

                <label>Last Name:</label>
                <input type="text" name='lastname' required>

                <label>Email:</label>
                <input type="text" name='email' required>

                <label>Birthday Date</label>
                <input type="date" name='birthdaydate' required>
                
                <label>Password:</label>
                <input type="password" name='password' required>
                
                <label>Confirm Password:</label>
                <input type="password" name='confirmpassword' required>
  
                <input class="login-button" type='submit' value='Register'>
            </form>
        </div>

    </div>


</body>

</html>