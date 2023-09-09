<?php
include 'class/Live.php';
$Live = new Live();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="大阪で活動する3ピースハードコアバンド「Stacked State」のオフィシャルホームページです。ライブ情報や物販など取り扱っております。">
  <title>Stacked State Official Site</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Stacked State",
  "image" : "https://stackedstate.com/images/img4.jpg"
}
</script>
</head>
<body>

  <!-- nav -->

  <nav>
     <div id="moveLine"></div>
     <img src="images/logo.png" alt="">

    <!-- 0728edit -->

     <div class="lang">
        <a href="J-index.php"><p>JPN</p></a>
        <a href="index.php"><p>ENG</p></a>
        <div class="clearfix"></div>
     </div>


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

<!-- header  -->

<header>
  <div class="header-bg"></div>
  <h3>TOO FAST TO LIVE</h3>
  <h1>TOO FAST</h1>

  <!-- 0728edit -->
  
  <div class="lang">
    <a href="J-index.php"><p>Japanese</p></a>
    <a href="index.php"><p>English</p></a>
    <div class="clearfix"></div>
  </div>



</header>

<!-- section 1 -->

<section id="section-1">
    <div class="box1"></div>
    <div class="box2">
    <h3>SONGS</h3>
    <div class="songs">
       <div class="songBox">
          <p>Ceasing</p>
          <audio controls src="songs/01-ni-owaru.mp3" ></audio>
       </div>
       <div class="songBox">
          <p>Straining</p>
          <audio  controls src="songs/02-ni-hayaru.mp3"></audio>
       </div>
       <div class="songBox">
          <p>Distracting</p>
          <audio  controls src="songs/03-ni-magireru.mp3"></audio>
       </div>
       <div class="songBox">
          <p>Meeting</p>
          <audio  controls src="songs/04-ni-majiwaru.mp3"></audio>
       </div>
       <div class="songBox">
          <p>Thrashing</p>
          <audio  controls src="songs/05-ni-tataku.mp3"></audio>
       </div>
       <div class="songBox">
          <p>Slacking</p>
          <audio  controls src="songs/06-ni-yurumu.mp3"></audio>
       </div>
    </div>

    </div>
    <div class="box3">

    <h2>LIVE INFO</h2>

    <?php
         $liveData = $Live->displayLives();
         if(!empty($liveData)){
         foreach($liveData as $row) :?>

      <div class="live-info">
          <h3><?php echo $row['live_date'] ?></h3>
          <p><?php echo $row['live_place'] ?></p>
          <p><a href="contact.php">TICKETS</a></p>
      </div>
      <?php endforeach; }else{
           
           echo "<h3>";
           echo "Coming Soon...";
           echo "</h3>";
           
         }?>

      
      <a id="info" href="live.php"><p>GET MORE INFO</p></a>

    </div>
    <div class="box4"></div>

</section>

<!-- section 2 -->

<section id="section-2">
  <img src="images/img6.jpg" alt="">
  <p>Stacked State formed in 2017 in Osaka city, Japan. The band lineup consisted of Ryu Shinomiya on drums, Kohei Kawabata on guitar, Shin Okamoto on bass.We play shows at local venues in Osaka.All of our songs are very fast and short punk rock ones.You can see whining in lyrics.In 2019,we had a band tour in Southeast Asia. Don't be hesitate to be in touch with us.Enjoy this website and feel our passion!
  </p>
  <a href="about.php"><p id="about">LEARN MORE</p></a>
  <img src="images/img20.jpg" alt="">
  <img src="images/img4.jpg" alt="">
  <div class="clearfix"></div>
</section>

<!-- section 3 -->

<section id="section-3">
     <h3>Videos</h3>
 <div class="videos">

 <div class="top-wrapper">
  <div class="videoBox">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/FHNoEzbYEuo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="videoBox">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/AgjP0g2gCmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="videoBox">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/t3j9WmxXCEQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

 </div>
  
 <div class="below-wrapper">

  <div class="videoBox">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VlXWOYWRpXM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="videoBox">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HE4Tqu6AiPA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="videoBox">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/ksZtTr2wy_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

</div>

</div>

 <a href="http://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw?sub_confirmation=1"><h2>subscribe to stacked state in youtube</h2></a>

</section>

<!-- section 4 -->

<section id="section-4">
 <h3>Stacked State Store</h3>
 <a id="prev" class="control prev"><i class="fas fa-angle-left fa-2x"></i></a>
 <a id="next" class="control next"><i class="fas fa-angle-right fa-2x"></i></a>
   <div class="product-wrapper slider" id="slider">

     <div class="basicProducts slides" id="slides">
          <div class="product slide"> 
            <img src="images/product1.jpg" alt="">
          </div>
          <div class="product slide"> 
            <img src="images/product2.jpg" alt="">
          </div>
          <div class="product slide"> 
            <img src="images/product3.jpg" alt="">
          </div>
          <div class="product slide"> 
            <img src="images/product4.jpg" alt="">
          </div>
          <div class="product slide"> 
            <img src="images/product5.jpg" alt="">
          </div>
     
     <div class="extendProducts">
          <div class="product"> 
            <img src="images/product1.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product2.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product3.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product4.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product5.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product1.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product2.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product3.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product4.jpg" alt="">
          </div>
          <div class="product"> 
            <img src="images/product5.jpg" alt="">
          </div>
       </div>
      </div>
      <div class="clearfix"></div>

   </div>
  
  <div class="dots">
    <span class="dot"><i class="fas fa-circle"></i></span>
    <span class="dot"><i class="fas fa-circle"></i></span>
    <span class="dot"><i class="fas fa-circle"></i></span>
    <span class="dot"><i class="fas fa-circle"></i></span>
    <span class="dot"><i class="fas fa-circle"></i></span>
  </div> 
 <a id="store" href="store.php"><h2>go to store</h2></a>
</section>

<!-- section 5 -->

<section id="section-5">
  <p>"My Fast Short Songs Are Stacked State"</p>
<div class="gallery">

 <div class="image image1">
  
 </div>
 <div class="image image2">
  
 </div>
 <div class="image image3">
  
 </div>
 <div class="image image4">
  
 </div>
 <div class="image image5">
  
 </div>
 <div class="image image6">
  
 </div>


</div>

</section>

<!-- section 6 -->

<section id="section-6">

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
      <a href="https://twitter.com/stackedstate"><i class="fab fa-twitter"></i></a>
      <a href="https://www.facebook.com/Stacked-State-113045213786062"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.youtube.com/channel/UCHCfOOkPsSeMzPtpcUYZcCw"><i class="fab fa-youtube"></i></a>
    </div>
          <button type="submit" name="submit">SUBMIT</button>
          <div class="clearfix"></div>
      </div>

   </form>

</section>

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

<script src="js/index.js"></script>
</body>
</html>