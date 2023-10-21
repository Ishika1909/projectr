<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Why should I use E-Grocery?</h3>
         <p>Discover new products and shop for 
            all your food and grocery needs from the comfort of your home or office. 
            No more getting stuck in traffic jams, paying for parking , 
            standing in long queues and carrying heavy bags 
            get everything you need, when you need, right at your doorstep. 
            Food shopping online is now easy as every product on your monthly shopping list, 
            is now available online at egrocery.com, India’s best online grocery store!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We offers a wide range of products. 
            Grocer se have a proper maintained delivery-system, and 
            one of the most neat delivery system. 
            You can pay cash at delivery, pay online or pay via e-wallets like Paytm, etc. 
            Returns can be done at the spot. If you dont want a specific product from the ordered items, 
            you can return to the delivery executive and get paid instantly. 
            If you are unhappy with a product you may return.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/P1.jpg" alt="">
         <p>I always buy my grocery from E-Grocery it was awesome,
             great price great delivery great products so 
            I am recommend to once shop online with E-Groucery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Vishal Tiwari</h3>
      </div>

      <div class="box">
         <img src="images/P2.jpg" alt="">
         <p>Amazing service , prompt & quality delivery without any hustle. 
            Placed order late night & got early morning delivery <br>
            Thank you E-Grocery..
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Aman Gupta</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I mostly order vegetables and fruits from E-Grocery. 
            Rates are very reasonable and everyday they offer products at great price. <br>
            Thank you E-Grocery..
             
            </p>
            
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Akash Roy</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I stay in Mumbai and have a big family to take care off, 
            recent hard time like Corona has proven a vital importance of players like E-Grocery.
            </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star-half-alt"></i> -->
         </div>
         <h3>Vaishnavi Shah</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>E-Grocery best service provider and quality of products is very best. 
            always deliever the product at said time and delievery persons behave very good</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Anurag Thakur</h3>
      </div>

      <div class="box">
         <img src="images/P3.jpg" alt="">
         <p>Excellent service and its help you to get your needs in suitable time.
             Its also make process very easy and simple.
              we can search product just simply get it also.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Arti Dogra</h3>
      </div>

   </div>
   <br>
   <div class="box-container">

      <div class="box">
         <img src="images/P4.jpg" alt="">
         <p>This is to Thank Shreya Dey & Trupi k for resolving 
            our refund issue successfully and refunded our pay ment back inour wallet.

Thank you E-Grocery..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star"></i> -->
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Akshat Jain</h3>
      </div>

      <div class="box">
         <img src="images/P7.jpg" alt="">
         <p>I bought that ITC MasterChef Vegetarian briyani masala paste from E-Grocery.
             I didn’t expect this much taste. It is very simple to cook.
              Value for money. Aroma is good...  </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Tina Dabi</h3>
      </div>

      <div class="box">
         <img src="images/P8.jpg" alt="">
         <p>3 Kg of mangoes for a 5 Kg paid order were delivered. However,
             when made a complain,
              they promptly agreed to refund for the missing quantity. So no regrets.
               Good deal.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anubhav Singh</h3>
      </div>

      <div class="box">
         <img src="images/P9.jpg" alt="">
         <p>I am customer of E-Grocery since last 2 years and have amazing experiences ,
             if ordered items received in damage condition, immediately they will give full refunds .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Safin Hasan</h3>
      </div>

      <div class="box">
         <img src="images/P11.jpg" alt="">
         <p>During lockdown I got full support from E-Grocery ,
             as many service providers have refused or not given delivery slots .
              these are the people who worked very Hard 
              </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star-half-alt"></i> -->
         </div>
         <h3>Sachin Atulkar</h3>
      </div>

      <div class="box">
         <img src="images/P12.jpg" alt="">
         <p>I've had an amazing experience with E-Grocery.I've received
             excellent quality with their product's too; fresh foods.
              Delivery is always on time & staff is well trained.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <!-- <i class="fas fa-star-half-alt"></i> -->
         </div>
         <h3>Shruti Sharma</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>