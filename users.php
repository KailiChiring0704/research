    <?php
        session_start();
        include("userfunction.php");
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
            <h1>Please Login</h1>
            <form name="form" action="userlogic.php" method="POST">
                <label> Username </label>
                <input type="text" id="user" name="user" required> 
                <label> Password </label>
                <input type="password" id="pass" name="pass" required> 
                <div class="submit">
                <input type="submit" id="btn" value="Login" name="submit">  
                <input type="checkbox" name="terms" id="terms" required> 
                </div> 
                <div class="terms">
                I agree to the <a href=""> terms and conditions</a>
                </div>
                <div class="needaccount">
                    Don't have an account yet?<a href="">Create one.</a>
                </div>
            </form>
        </div>

    </body>
    <style>
        .needaccount{
            transform: translate(5vh, 10px);
            width:300px;
            font-size:13px;
        }
        .needaccount a{
            color: #6495ED;
        }
        input[type=checkbox]{
            width:15px;
            transform: translate(-23vh, -40px);
            padding:10px;
        }
        .terms a{
            font-size:12px;
            color: #6495ED;
           
        }
        .terms{
            font-size:12px;
            transform: translate(10vh, -85px);
        }
    </style>
    </html>