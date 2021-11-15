<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>logedd</title>
</head>
<body>  
<div class="container">
        <div class="navbar">
            <div class="log">
               <a href=""><img src="logo.png" alt=""></a>
            </div>
            <nav>
                <ul>
                       <li>
                         <a href="index.html"><i class="fas fa-search" style="font-size:20px"></i> Search</a>
                       </li>
                      <li>
                         <a href=""> <i class="fas fa-percentage" style="font-size:20px"></i>Offers</a>
                      </li>
                      <li>
                        <a href=""> <i class="fas fa-question-circle" style="font-size:20px"></i>Help</a>
                      </li>
                      <li>
                          <a href=""> <i class="fas fa-user" style="font-size:20px"></i><?php echo'' .$_SESSION['user']?></a>
                      </li>
                      <li>
                      <a href="logout.php">logout</a>
                      </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="con-2">
        <div class="formcont">
            <img src="text-slide-top1.png" alt="">
            <h1>THE BEST PLACE <BR>TO HAVE A GOOD TASTE</h1>
            <img class="second"src="text-slide-bottom1.png" alt="">
            <br>   
            <button class="btn">Grab now</button>
       </div>
    </div>
    <div class="catogires">
        <div class="samll-cont">
            <div class="row">
                <div class="col">
                    <img src="briyani.jpg" alt="">
                    <h1>Green Bawarchi Take Away</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (1,579 Delivery Reviews)</p1>
                    <p>Biryani,North Indian,Chinese <br> &#x20B9 200 for one -30min</p>
                </div>
                <div class="col">
                    <img src="tiffin.jpg" alt="">
                    <h1>Papdams Blue Restaurant</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (2,079 Delivery Reviews)</p1>
                    <p>Biryani,North Indian,Chinese <br> &#x20B9 200 for one -30min</p>
                </div>
                <div class="col">
                    <img src="biryani3.jpg" alt="">
                    <h1>Kadai Restaurant</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i> <br>
                    <p1> 4.5 (1,279 Delivery Reviews)</p1>
                    <p>Biryani,North Indian,Chinese <br> &#x20B9 200 for one -30min</p>
                </div>
                <div class="col">
                    <img src="pizza.jpg" alt="">
                    <h1>Country Oven</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (8,279 Delivery Reviews)</p1>
                    <p>Pizza <br> &#x20B9 150 for one -30min</p>
                </div>
                <div class="col">
                    <img src="sweet.jpg" alt="">
                    <h1>Heralal Sweet House</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (1,279 Delivery Reviews)</p1>
                    <p>Deserts <br> &#x20B9 150 for one -20min</p>
                </div>
                <div class="col">
                    <img src="kaditifins.jpg" alt="">
                    <h1>Om Sai Tiffins</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 2.5 (2,019 Delivery Reviews)</p1>
                    <p>South Indian <br> &#x20B9 50 for one -20min</p>
                </div>
                <div class="col">
                    <img src="cake.jpg" alt="">
                    <h1>Cake Store</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (1,279 Delivery Reviews)</p1>
                    <p>Bakery <br> &#x20B9 50 for one -20min</p>
                </div>
                <div class="col">
                    <img src="rythu.jpg" alt="">
                    <h1>Kanishka Dhaba</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (5,279 Delivery Reviews)</p1>
                    <p>South Indian, North Indian <br> &#x20B9 60 for one -20min</p>
                </div>
                <div class="col">
                    <img src="cake 1.jpg" alt="">
                    <h1>A1 Cake Store</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i><br>
                    <p1> 3.5 (2,279 Delivery Reviews)</p1>
                    <p>Bakery <br> &#x20B9 50 for one -20min</p>
                </div>
                <div class="col">
                    <img src="biryani5.jpg" alt="">
                    <h1>Landmark Hotel</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br>
                    <p1> 4.5 (6,259 Delivery Reviews)</p1>
                    <p>South Indian, North Indian <br> &#x20B9 360 for one -30min</p>
                </div>
                <div class="col">
                    <img src="startes.jpg" alt="">
                    <h1>Charcol BBQ</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i><br>
                    <p1> 4.5 (5,279 Delivery Reviews)</p1>
                    <p>Fast Food , North Indian,Continetal <br> &#x20B9 60 for one -20min</p>
                </div>
                <div class="col">
                    <img src="icecraeam1.jpg" alt="">
                    <h1>Creamy Shakes</h1>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i></i>
                    <i class="far fa-star"></i><br>
                    <p1> 2.5 (1,279 Delivery Reviews)</p1>
                    <p>Ice creams,Deserts,Beverges <br> &#x20B9 60 for one -20min</p>
                </div>
                <button class="btn"><i class="fas fa-plus">  </i>View more</button>
            </div>
        </div>
    </div>
    <div class="explore">
        <h4>Explore other options for you here</h4>
        <h10><b> Popular cuisines near me</b> </h10>
        <div class="first">
             <p9>Andhra food near me - Arabian food near me - Bakery food near me - Beverages food near me - 
                 Biryani food near me - Burger food near me - Chinese food near me - Desserts food near me - 
                  Ice Cream food near me - Kebab food near me - Lebanese food near me - Mithai food near me - 
                  Mughlai food near me - North Indian food near me - Pizza food near me - Rolls food near me -
                  Sandwich food near me - Seafood food near me - South Indian food near me - Street food near me    </p9>
        </div>
    </div>
    <div class="cities">
        <div class="small-cont2">
            <h3>Cities We To Deliver To </h3>
            <div class="row">
                
                <div class="col5">
                     <p3>Delhi NCR</p3>
                </div>
                <div class="col5">
                    <p3>Mumbai </p3>
               </div>
               <div class="col5">
                     <p3>Bangalore </p3>
                </div>
                <div class="col5">
                    <p3>Hyderabad </p3>
               </div>
               <div class="col5">
                     <p3>Ahmedabad </p3>
                </div>
                <div class="col5">
                    <p3>Chennai </p3>
               </div>
               <div class="col5">
                     <p3>Kolkata </p3>
                </div>
                <div class="col5">
                    <p3>Surat</p3>
               </div>
               <div class="col5">
                     <p3>Pune</p3>
                </div>
                <div class="col5">
                    <p3>Jaipur</p3>
               </div>
               <div class="col5">
                     <p3>Lucknow</p3>
                </div>
                <div class="col5">
                    <p3>Kanpur</p3>
               </div>
               <div class="col5">
                     <p3>Nagpur</p3>
                </div>
                <div class="col5">
                    <p3>Indore</p3>
               </div>
               <div class="col5">
                    <p3>Patna</p3>
               </div>
            </div>
        </div>
    </div>
    <div class="bra">
        <div class="small-cont2">
            <div class="row">
                <div class="col6">
                    <h5>COMPANY</h5>
                    <p6>Who We Are<br>Blog<br>Careers<br>Report Fraud<br>Contact<br>Investor Relations</p6>
                </div>
                <div class="col6">
                 <h5>USEFUL LINKS</h5>
                 <p6>Contact Us<br>FAQ<br>Terms<br>Security<br>Sitemap</p6>
             </div>
             <div class="col6">
                 <h5>ONLINE SHOPPING</h5>
                 <img src="playstor.png">
                 <br>
                 <img src="play.png">
                 <br>
             </div>
             <div class="col6">
                 <h5>KEEP IN TOUCH</h5>
                 <div class="soc">
                     <img src="icons8-facebook-240.png" alt="">
                     <img src="icons8-twitter-144.png" alt="">
                     <img src="icons8-instagram-90.png" alt="">
                 </div>
             </div>
             <h8>In case of any concern,Contact Us</h8>
             <h9>&#169 2021 WWW.Whizz.com. All rights reserved</h9>
            </div>
        </div>
    </div>
</body>
</html>