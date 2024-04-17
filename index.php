<?php
    session_start();
    include("loginfunction.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="loginsss.css">
</head>
<header>
       
        <div class="logo">
            <img src="title.png" alt="">
        </div>
        <div class="minilogo">   
        <ul class="nav">
            
            
        </ul>
    </div>
</header>
<div class="line1">
            <hr>
</div>
<hr class="footer-hr">
            <div class="footer">
          </div> 
          
    </body>

<body>
    <div id="form">
        <h1>Hi Admin!</h1>
        <form name="form" action="loginlogic.php" method="POST">
            <label> Username </label>
            <input type="text" id="user" name="user"> 
            <label> Password </label>
            <input type="password" id="pass" name="pass"> 
            <div class="submit">
            <input type="submit" id="btn" value="Login" name="submit">   
            </div> 
                 
        </form>
    </div>

</body>
</html>