<?php
include 'class/Live.php';
$Live = new Live();
include 'class/PastLive.php';
$pastLive = new pastLive();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Stacked State Official Site</title>
  <link rel="stylesheet" href="css/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <!-- nav -->

  <nav>
     <div id="moveLine"></div>
     <img src="images/logo.png" alt="">

     <div class="hamburgers">
        <p id="hamburger1"> &#9776;</p>
        <p id="hamburger2"> &#9776;</p>
        
     </div>

     <div class="icons">
      <a href="https://twitter.com/stackedstate"><i class="fab fa-twitter"></i></a>
      <a href="https://www.facebook.com/Stacked-State-113045213786062"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw"><i class="fab fa-youtube"></i></a>
    </div>

     <ul id="mainMenu">
       
       <li class="mainMenu" id="menu1"><a href="index.php">HOME</a></li>
       <li class="mainMenu" id="menu2"><a href="about.php">ABOUT US</a></li>
       <li class="mainMenu" id="menu3"><a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw">VIDEO</a></li>
       <li class="mainMenu" id="menu4"><a href="live.php">LIVE</a></li>
       <li class="mainMenu" id="menu5"><a href="store.php">STORE</a></li>
       <li class="mainMenu" id="menu6"><a href="contact.php">CONTACT US</a></li>
     </ul>     

     <div class="clearfix"></div>

  </nav>

  <div class="nav2">
     <ul id="hideMenu">
       
      <a href="index.php"><li>HOME</li></a>
      <a href="about.php"><li>ABOUT US</li></a>
      <a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw"><li>VIDEO</li></a>
      <a href="live.php"><li>LIVE</li></a>
      <a href="store.php"><li>STORE</li></a>
      <a href="contact.php"><li>CONTACT US</li></a>

     </ul>


  </div>

<!-- section 1 -->
<section id="section-1">

<div class="form">
   <form method="POST" action="action/contactAction.php">
      <h2>CONTACT FOR BOOKINGS</h2>
      <label for="name">NAME</label>
      <input id="name" name="name" type="text">
      <label for="email">EMAIL ADDRESS</label>
      <input id="email" name="email" type="email">
      <label for="message">MESSAGE</label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
      <div class="belowBox">
         <div class="icons">
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
          </div>
          <button type="submit" name="submit">SUBMIT</button>
          <div class="clearfix"></div>
      </div>

   </form>
 </div>
  <div class="attention">
  <h2>ATTENTION</h2>

   <p>Your details will only be stored on Stacked State database and will not be distributed to any third parties without your permission. By selecting the boxes above you are giving your consent to use your info for marketing.

You can change your mind at any time by clicking the unsubscribe link in the footer of any email you receive from us, or by changing your preferences in the account section. We will treat your information with respect.

We will use the information you provide on this form to process your order and be in touch with you to provide updates on your order/s. Your details will be stored for future transactions, however you can request for your details to be removed via the account page anytime following successful completion of your order.

For further details on our policies and your rights please view our privacy policy. By clicking below, you agree that we may process your information in accordance with these terms.</p>
<img src="images/img21.jpg" alt="">
</div>

</section>


<!-- section 2 -->





  <span id="page-top"><i class="fas fa-chevron-circle-up fa-2x"></i></span>

<!-- footer -->

<footer>
<p>All Right Reserved©Stacked State</p>
<div class="icons">
      <a href="https://twitter.com/stackedstate"><i class="fab fa-twitter"></i></a>
      <a href="https://www.facebook.com/Stacked-State-113045213786062"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw"><i class="fab fa-youtube"></i></a>
    </div>
</footer>

<script src="js/contact.js"></script>
</body>
</html>