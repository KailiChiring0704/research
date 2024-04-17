<?php
    session_start();
    include("userfunction.php");
?> 
<html lang="en">
    <head>
        <title>
            1201PMilktea
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
       
            <div class="logo">
                <img src="title.png" alt="">
            </div>
            <div class="minilogo">   
            <ul class="nav">
                <li><a href="contactus.php">Contact us</a></li>
                <hr>
                
            </ul>
        </div>  
    </header>
    <div class="line1">
        <hr>
    </div>
    
        <form method="post">
    </div>

    <div class="proceed"> 
        <a href="menu.php">Proceed to Menu</a>
        <a href="aboutus.php" id="">About Us</a>
            </div>
   
       <div class="info">
        <div class="title">
            <div class="title-img">
                <h4><img src="title.png" alt=""></h4>
               </div>
               <div class="title-text">
               Welcome to 1128 Tea & Cafè, your go-to destination for the perfect fusion of coffee and milk tea delights. Situated in the heart of 70 Kalusugan St. Batasan Hills Quezon City, our cozy corner is a haven for beverage enthusiasts seeking a delightful blend of flavors and a warm, inviting atmosphere.

               </div>
        </div>
      </div>
       </form>
            </div>
        <hr class="footer-hr">
        <div class="footer">
        </div>
    </body>
        <style>
            .info{
                width: 100vw;
                height: 99vh;

            }
            .info .title{
                width: 100vw;
                height: 99vh;
                color:white;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                
            }
            .title .title-text{
                width: 500px;
                line-height: 30px;
                text-align: justify;
                color: #c4c4c4;
            }
            .footer{
                width:100%;
                height:38px;
                background-color: rgba(255, 255, 255, 0.1);
                display: flex;
                position: absolute;
                bottom: 0;
            }
            .footer-hr{
                position: absolute;
                bottom:38px;
                width:99.8%;
            }
            *{
            padding: 0;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                
            }
            header img{
                width: 50px;
                
            }
            header {
                position: fixed;
                width: 100%;
                background-color: rgb(255, 255, 255, 0.1);
                display: flex;
                justify-content: space-between;
                align-items: center;
                list-style: none;
                
            }
            .line1 hr{
               
               transform: translate(0% , 50px);
               width: 142.6%;
            }
             .logo{
                margin-left: 5%;
            }
            header .minilogo li{
                list-style: none;
                color: white;
            }
            .nav{
                display: flex;
                gap: 40px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .minilogo{
                display: flex;
                align-items: center;
                margin-right: 5%;
            }
            .nav li a{
                text-decoration: none;
                color: white;
            }
            body{
            height: 0%;
            background-position: center;
            width: 70%;
            background: url("1stpage.png") no-repeat;
            background-size: 100%
            }
            .admin a{
                margin: -5px 0 20px 5px;
                color: #4b4b4b;
                font-size: 25px;
                background-color: #ffffff;
                border: 2px solid black;
                margin: 0;
                padding: 5;
               
                border-radius: 7px;
                text-decoration: none;
            }
            form .text_field{
                position: relative;
                border-bottom: 2px solid #adadad;
                margin: 40px 0;
            }
            .text_field input{
                width: 100%;
                padding: 0 5px;
                font-size: 16px;
                border: none;
                background: none;
                outline: none;
            }
            .proceed{
                display: flex;
                position: absolute;
                left: 14%;
                bottom: 19%;
                gap: 20px;
            }
            .proceed a{
                text-decoration: none;
                color: #f1f1f1;
                font-size: 19px;
                font-family: Arial, Helvetica, sans-serif;
                border:1px solid #ffc962;
                padding: 15px;
                z-index: 1000;
            }
            .proceed a:nth-last-child(1){
                background: #ffc962;
                color:black;
            }
            .title-img img{
                width: 400px;
                 
            }
            .title{
                
            }
           
            
       
        </style>
</html>
