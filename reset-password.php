<?php
    include("loginfunction.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<header>
    <div class="logo">
        <img src="title.png" alt="">
    </div>
    <div class="minilogo">   
    <ul class="nav">
        <hr>
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
    <h1>Forgot Password</h1>
    <form name="form" action="reset-password.php" method="POST">
        <label> Username </label>
        <input type="text" id="user" name="user" required>
        <div class="submit">
            <input type="submit" id="btn" value="Submit" name="submit">
        </div>
    </form>
</div>
</body>
</html>