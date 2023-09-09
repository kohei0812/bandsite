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
  <title>問い合わせフォーム| Stacked State Official Site</title>
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
       
       <li class="mainMenu" id="menu1"><a href="J-index.php">HOME</a></li>
       <li class="mainMenu" id="menu2"><a href="J-about.php">ABOUT US</a></li>
       <li class="mainMenu" id="menu3"><a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw">VIDEO</a></li>
       <li class="mainMenu" id="menu4"><a href="J-live.php">LIVE</a></li>
       <li class="mainMenu" id="menu5"><a href="J-store.php">STORE</a></li>
       <li class="mainMenu" id="menu6"><a href="J-contact.php">CONTACT US</a></li>
     </ul>     

     <div class="clearfix"></div>

  </nav>

  <div class="nav2">
     <ul id="hideMenu">
       
      <a href="J-index.php"><li>HOME</li></a>
      <a href="J-about.php"><li>ABOUT US</li></a>
      <a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw"><li>VIDEO</li></a>
      <a href="J-live.php"><li>LIVE</li></a>
      <a href="J-store.php"><li>STORE</li></a>
      <a href="J-contact.php"><li>CONTACT US</li></a>

     </ul>


  </div>

<!-- section 1 -->
<section id="section-1">

<div class="form">
   <form method="POST" action="action/contactAction.php">
      <h2>お問い合わせフォーム</h2>
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
          <button type="submit" name="submit">送信</button>
          <div class="clearfix"></div>
      </div>

   </form>
 </div>
  <div class="attention">
  <h2>個人情報の取扱いについて</h2>

   
<p>=====================================================</p>
<p>個人情報の取り扱いについて</p>
<p>=====================================================</p>
<br>
<p> ・お客様からお寄せいただいた情報は、お問い合わせへのご回答のためにのみ使用し、その他の目的で使用したり、無断で第三者へ提供することはございません。</p>
<br>
<p> ・お客様からお寄せいただいた情報に基づき、Stacked Stateよりe-mail等でご連絡差し上げる場合がございますのであらかじめご承知願います。
個人情報を正しくご記入いただけなかった場合は、対応できない場合がございます。</p>
<br>
<p>=====================================================</p>
<p>個人情報の開示について</p>
<p>=====================================================</p>
<br>
<p>お問い合わせご本人から個人情報に関する開示請求があった場合、または開示した個人情報に対する訂正、削除の請求があった場合は、個人情報を開示、訂正または削除いたします。</p>

<p>[ Stacked State ]</p>

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