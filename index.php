<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Atos Accessibility Account Creation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styleLogin1.css">
    <a class="skip-to-content" href=#start> Skip to content</a>
    
</head>
<body>


    <img class="AtosLogo" src="Images/atos.png" alt="Atos logo" >

    <div class="formFormat">
    <h1 class=PageTitle>Welcome to the Atos Accessibility Hub</h1>
    <p> Please enter your details below to login to the Atos Accessibility Hub</p>
    <form name="loginDetails" method="post" action="retrieve.php" class="tester" id="start" >
        <fieldset>
            <legend>Account Login</legend>
            <label for="userUsername">Username:</label>
            <input type="username" name="userUsername" placeholder="Enter your username" maxlength="15" required autocomplete="yes">
            <label for="enteredPassword">Password:</label>
            <input type="password" name="enteredPassword" placeholder="Enter your password" maxlength="15" required autocomplete="yes"><br>     
            <input type="submit"><br>
        </fieldset>
    </form>
    <a href="creation.php" class="tester">Don't have an account? Create one here</a>
    </div>




    <div class="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="Quick Links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Home Page</a></li>
                            <li><a href="#">Pattern Library</a></li>
                        </ul>
                    </div>
                    <div class="About">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Atos</a></li>
                            <li><a href="#">Accessibility</a></li>
                        </ul>
                    </div>
                    <div class="socialMedia">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
</body>
</html>