<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/Index.css">
    <title>XDDDD</title>
</head>
<body>

    <div class="Main">
    <header>
        <div class="navBar">
                <ul>
                    <li id="Title"><a href="Index.php">XDDDD</a></li>
                    <li><a href="Index.php">Home</a></>
                    <li><a href="Signup.php">Signup</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
        </header>
        <div class="MainContainer">
            <div class="LoginForm">
                <!--Sends info to login.inc.php-->
                <form action="../Includes/Login.inc.php" method="post">
                    <label for="uName">UserName</label>
                    <input type="text" name="uName" id="uName">
                    <label for="uPass">Password</label>
                    <input type="password" name="uPass" id="uPass">
                    <button type="submit" name="Login_Button">Login</button>
                </form>
            </div>
        </div>
        
    </div>

</body>
</html>