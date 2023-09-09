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
  <title>ライブ情報 | Stacked State Official Site</title>
  <link rel="stylesheet" href="css/live.css">
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
 
<h2>LIVE</h2>

<?php
         $liveData = $Live->displayLives();
         if(!empty($liveData)){
         foreach($liveData as $row) :?>

<div class="live-wrapper">

<div class="date">
  <h3><?php echo $row['live_date'] ?></h3>
  <p><?php echo $row['live_ow'] ?></p>
</div>
<div class="content">
 <h2><?php echo $row['live_place'] ?></h2>
 <h3><?php echo $row['live_title'] ?></h3>
 <p><?php echo $row['live_details'] ?></p>
 <br>
 <p><?php echo $row['live_cw'] ?></p>
 <img style="width:200px;" class="img-fluid" src="upload/<?php echo $row['live_picture']?>" alt="">
 <div class="ggmap"><?php echo $row['live_locate'] ?></div>

 <div class="reserve">
   <span><i class="far fa-envelope"></i></span>
   <a role="button" href="contact.php">チケット予約</a> 
</div> 


</div>

</div>

<?php endforeach; }else{
           echo "<div class='live-wrapper'>";
           echo "<h2>";
           echo "Coming Soon...";
           echo "</h2>";
           echo "</div>";
         }?>

</section>

<!-- section 2 -->

<section id="section-2">
  <h2>PAST LIVE</h2>
 <div class="past-wrapper">
    <div class="date-wrapper">
    <?php
         $pastLiveData = $pastLive->displayPastLives();
         if(!empty($pastLiveData)){
         foreach($pastLiveData as $row) :?>

      <p><?php echo $row['past_live_date'] ?></p>
    
      <?php endforeach; }else{
           echo "<p>";
           echo "</p>";
         }?>
    </div>  
<div class="contents">

<?php
         if(!empty($pastLiveData)){
         foreach($pastLiveData as $row) :?>


    <div class="content-wrapper">
      <p><?php echo $row['past_live_date'] ?></p>
      <h2><?php echo $row['past_live_place'] ?></h2>
      <h3><?php echo $row['past_live_title'] ?></h3>
      <p><?php echo $row['past_live_cw'] ?></p>
    </div>
  
    <?php endforeach; }else{
           echo "<div class='content-wrapper'>";
           echo "<h2>";
           echo "Coming Soon...";
           echo "</h2>";
           echo "</div>";
         }?>


   </div>
  </div>
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

<script src="js/live.js"></script>
</body>
</html>