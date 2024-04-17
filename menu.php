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
                <li><a href="WELCOME.php">Home</a></li> <hr> <a href=""> <img src="cart.png" alt=""></a>
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
    </body>
    <section class="info">
</section>
<section class="cards-wrapper">
  <div class="card-grid-space">
    <div class="num"></div>
    <a class="card" href="" style="--bg-img: url(images/milkseriescat.jpg)">
      <div>
        <h1>Milk Series</h1>
        <p>Creamy delight of our Milk Series at our milk tea shop.</p>
        
        <div class="tags">
          <div class="tag">View</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num"></div>
    <a class="card" href="icedcoffeemenu.php" style="--bg-img: url(images/icedcoffeecat.jpg)">
      <div>
        <h1>Iced Coffee</h1>
        <p>In the refreshing allure of ice coffee, where the boldness of coffee meets the crisp chill of ice. </p>
        
        <div class="tags">
          <div class="tag">View</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <div class="num"></div>
    <a class="card" href="https://codetheweb.blog/2017/10/14/links-images-about-file-paths/" style="--bg-img: url(images/premiumfrappecat.jpg)">
      <div>
        <h1>Premium Frappe</h1>
        <p>Indulge in the creamy delight of our premium frappe milk tea, where every sip is a luxurious journey of flavors. </p>
        
        <div class="tags">
          <div class="tag">View</div>
        </div>
      </div>
    </a>
  </div>
  <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
</section>
    <style>
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
    @import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Open Sans';
  
}

a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 4rem;
  padding: 4rem;
  margin: 0 auto;
  width: max-content;
  transform: translate(7% , -10%);
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 20em;
  width: 15em;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card:hover {
  transform: rotate(0);
}

.card h1 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card p {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background-color: rgb(255, 255, 255, 0.5);;
  width: 250%;
  height: 250%;
}

.card:after {
  background:;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    /margin-left: 0;
    /text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}
    </style>
        </html>