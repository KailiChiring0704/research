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
                <li><a href="menu.php">Go back</a></li> <hr> <img src="cart.png" alt="">
            </ul>
        </div>
          
    </header>
    <div class="line1">
        <hr>
    </div>
       <div class="info">
        </div>
      </div>
       </form>
            </div>
        <hr class="footer-hr">
        <div class="footer">
        </div>
        </form>
            </div>
            <h1>Make an Order</h1>
    <form id="orderForm" class="orderform" onsubmit="return displayOrder()">
       
        <label for="milktea">Flavor:</label><br>
        <select id="milktea" name="milktea">
            <option value="original">Americano</option>
            <option value="taro">Caramel Macchiato</option>
            <option value="matcha">Mocha Latte</option>
            <option value="matcha">Peppermint Mocha</option>
            <option value="matcha">Spanish Latte</option>
            <option value="matcha">Dirty Matcha</option>
            <option value="matcha">French Vanilla</option>
            <option value="matcha">Salted Caramel Latte</option>
            <option value="matcha">White Mocha</option>
            <option value="matcha">White Chocolate</option>

        </select><br>
        <label for="size">Size:</label><br>
        <select id="size" name="size">
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select><br>
        <label for="toppings">Add Ons:</label><br>
        <input type="checkbox" id="boba" name="toppings" value="boba">
        <label for="boba">Pearl</label><br>
        <input type="checkbox" id="jelly" name="toppings" value="jelly">
        <label for="jelly">Coffee Jelly</label><br>
        <input type="checkbox" id="Nata" name="toppings" value="jelly">
        <label for="Nata">Nata</label><br>
        <input type="checkbox" id="Whipped Cream" name="toppings" value="jelly">
        <label for="Whipped Cream">Whipped Cream</label><br>
        <input type="checkbox" id="Crushed Oreo" name="toppings" value="jelly">
        <label for="Crushed Oreo">Crushed Oreo</label><br>
        <input type="checkbox" id="Cheesecake" name="toppings" value="jelly">
        <label for="Cheesecake">Cheesecake</label><br>
        <input type="checkbox" id="Extra Coffee Shot" name="toppings" value="jelly">
        <label for="Extra Coffee Shot">Extra Coffee Shot</label><br>
        
       
       
        <input type="submit" value="Order"> 
    </form>
    </body>
    <div class="icedcoffee">
        <img src="images/icedcoffee.png" alt="">
    </div>
    <div class="menu">
        <p class="am">Americano</p> <p class="ca">Caramel Macchiato</p> <p class="moch">Mocha Latte</p> <p class="pep">Peppermint Mocha</p> <p class="spa">Spanish Latte</p>
        <p class="di">Dirty Matcha</p> <p class="fre">French Vanilla</p> <p class="sa">Salted Caramel Latte</p> <p class="whi">White Mocha</p> <p class="cho">White Chocolate</p>
       
    </div>
    <style>
        .menu .am{
            color:white;
            transform: translate(226px , -115vh);
            font-size:60%;
            width:10px;
        }
        .menu .ca{
            color:white;
            transform: translate(309px , -116.5vh);
            font-size:60%;
            width:100px;
        }
        .menu .moch{
            color:white;
            transform: translate(422% , -118.2vh);
            font-size:60%;
            width:100px;
        }
        .menu .pep{
            color:white;
            transform: translate(500% , -120vh);
            font-size:60%;
            width:100px;
        }
        .menu .spa{
            color:white;
            transform: translate(605% , -121.8vh);
            font-size:60%;
            width:100px;
        }
        .menu .di{
            color:white;
            transform: translate(220% , -99vh);
            font-size:60%;
            width:100px;
        }
        .menu .fre{
            color:white;
            transform: translate(322% , -100.5vh);
            font-size:60%;
            width:100px;
        }
        .menu .sa{
            color:white;
            transform: translate(405% , -102.3vh);
            font-size:60%;
            width:100px;
        }
        .menu .whi{
            color:white;
            transform: translate(514% , -104vh);
            font-size:60%;
            width:100px;
        }
        .menu .cho{
            color:white;
            transform: translate(605% , -105.7vh);
            font-size:60%;
            width:100px;
        }
        .payment{
            justify-content: space-evenly;
            background-color: rgba(0, 0, 0, 0.5);
            width:250px;
            border-radius: 5px;
            padding:20px;
            transform: translate(-1% , 0vh);
        }
        .payment p{
            transform: translate(10% , 0vh);
        }
        .payment a{
            color:White;
            font-family:italic;
            color: #c4c4c4;
        }
        .payment img{
            width:100px;
            margin-left:0px;
            padding:0px;
            transform: translate(30% , 1vh);
            justify-content: space-evenly;
        }
        h1{
            color:white;
            transform: translate(80% , -80vh);
            font-size:45px;
        }
      .info {
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
    .proceed .return{
        text-decoration: none;
        color: white;
        font-size: 19px;
        font-family: Arial, Helvetica, sans-serif;
        border:1px solid white;
        padding: 15px;
         z-index: 1000;
    }
    .proceed .return:nth-last-child(1){
        color:white;
        background-color: rgba(255, 255, 255, 0.1);
        transform: translate(570% , 100%);
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
        transform: translate(0px , 50px);
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
    .nav img{
      width: 30px;

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
    .form .orderform{
        width:10px;
    }
    .icedcoffee {
        width:0px;
        position:absolute;
        transform: translate(0% , -10vh);
    }
    .icedcoffee img{
        width:70vh;
        transform: translate(35% , -140vh);
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        padding:5px;
        margin:0px;
        box-shadow: 1px 1px 10px 5px #000;
    }
    .orderForm{
        transform: translate(80.5% , -80vh);
        color:white;
        font-size:2.5vh;
    }
    input[type=submit] {
        color: #ffc962;
        width:291px;
        border-radius: 5px;
        background-color: rgba(0, 0, 0, 0.5);
        padding:10px;
        transform: translate(-1.5% , 0vh);
        cursor: pointer;
    }

@media (max-width: 768px) {
  body {
    width: 100%;
  }
  header {
    flex-direction: column;
  }
 .logo {
    margin: 0;
  }
 .minilogo {
    margin: 0;
  }
 .nav {
    flex-direction: column;
  }
 .nav li {
    margin: 10px 0;
  }
 .info {
    height: auto;
  }
 .title {
    flex-direction: column;
  }
 .title-text {
    margin-bottom: 20px;
  }
 .proceed {
    flex-direction: column;
  }
 .proceed a {
    margin-bottom: 10px;
  }
 .orderForm {
    transform: translate(0, -80vh);
  }
 .payment {
    flex-direction: column;
  }
 .payment a {
    margin-bottom: 10px;
  }
 .menu {
    flex-direction: column;
  }
 .menu p {
    margin-bottom: 10px;
  }
 .icedcoffee img {
    width: 100%;
    transform: translate(0, -140vh);
  }
}
    </style>
        </html>