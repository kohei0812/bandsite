var slider = document.getElementById('slider'),
    sliderItems = document.getElementById('slides'),
    prev = document.getElementById('prev'),
    next = document.getElementById('next');

function slide(wrapper, items, prev, next) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.getElementsByClassName('slide'),
      slidesLength = slides.length,
      slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
      // firstSlide = slides[0],
      // lastSlide = slides[slidesLength - 1],
      // cloneFirst = firstSlide.cloneNode(true),
      // cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;

      var dot = document.getElementsByClassName("dot");
      
  // Clone first and last slide
  // items.appendChild(cloneFirst);
  // items.insertBefore(cloneLast, firstSlide);
  wrapper.classList.add('loaded');
  
  // Mouse events
  items.onmousedown = dragStart;
  
  // Touch events
  // items.addEventListener('touchstart', dragStart);
  // items.addEventListener('touchend', dragEnd);
  // items.addEventListener('touchmove', dragAction);
  
  // Click events
  prev.addEventListener('click', function () { shiftSlide(1) });
  next.addEventListener('click', function () { shiftSlide(-1) });
  
  // Transition events
  items.addEventListener('transitionend', checkIndex);

  function dragStart (e) {
    e = e || window.event;
    e.preventDefault();
    posInitial = items.offsetLeft;
    
    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }

  // function dragAction (e) {
  //   e = e || window.event;
    
  //   if (e.type == 'touchmove') {
  //     posX2 = posX1 - e.touches[0].clientX;
  //     posX1 = e.touches[0].clientX;
  //   } else {
  //     posX2 = posX1 - e.clientX;
  //     posX1 = e.clientX;
  //   }
  //   items.style.left = (items.offsetLeft - posX2) + "px";
  // }
  
  // function dragEnd (e) {
  //   posFinal = items.offsetLeft;
  //   if (posFinal - posInitial < -threshold) {
  //     shiftSlide(1, 'drag');
  //   } else if (posFinal - posInitial > threshold) {
  //     shiftSlide(-1, 'drag');
  //   } else {
  //     items.style.left = (posInitial) + "px";
  //   }

  //   document.onmouseup = null;
  //   document.onmousemove = null;
  // }
  
  function shiftSlide(dir, action) {
    items.classList.add('shifting');
    
    if (allowShift) {
      if (!action) { posInitial = items.offsetLeft; }

      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;      
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;      
      }
    };

    if(index != 5){

    dot[0].style.color = "black";
    dot[1].style.color = "black";
    dot[2].style.color = "black";
    dot[3].style.color = "black";
    dot[4].style.color = "black";
    dot[index].style.color = "rgb(255, 192, 203)";

    } else {

      dot[0].style.color = "rgb(255, 192, 203)";
      dot[1].style.color = "black";
      dot[2].style.color = "black";
      dot[3].style.color = "black";
      dot[4].style.color = "black";

    }




    allowShift = false;



  }
    
  function checkIndex (){
    items.classList.remove('shifting');

    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }

    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }

    if(index != 5){

      dot[0].style.color = "black";
      dot[1].style.color = "black";
      dot[2].style.color = "black";
      dot[3].style.color = "black";
      dot[4].style.color = "black";
      dot[index].style.color = "rgb(255, 192, 203)";
  
      } else {
  
        dot[0].style.color = "rgb(255, 192, 203)";
        dot[1].style.color = "black";
        dot[2].style.color = "black";
        dot[3].style.color = "black";
        dot[4].style.color = "black";
  
      }



    allowShift = true;
  }

  setInterval(function () { shiftSlide(1)},5000);
  
 

  dot[0].addEventListener('click', function () { slideChange(0) });
  dot[1].addEventListener('click', function () { slideChange(1) });
  dot[2].addEventListener('click', function () { slideChange(2) });
  dot[3].addEventListener('click', function () { slideChange(3) });
  dot[4].addEventListener('click', function () { slideChange(4) });
  
  
  function slideChange(i) {
    items.classList.add('shifting');
    items.style.left = -((i+1) *  slideSize) + "px";
    index = i;

    dot[0].style.color = "black";
    dot[1].style.color = "black";
    dot[2].style.color = "black";
    dot[3].style.color = "black";
    dot[4].style.color = "black";
    dot[i].style.color = "rgb(255, 192, 203)"

  }

}

slide(slider, sliderItems, prev, next);



$(window).on('load', function() {

  (function(){
    let $playingAudio = null;
      let $audioList = $("div.audio>audio, #section-1>.box2>.songs>.songBox>audio");
  
      let playAudioHandler = function playAudioHandler(event){
          if($playingAudio && $playingAudio[0] !== event.target){
              $playingAudio[0].pause();
  
              // 停止時に位置を最初にする場合は下↓のコメントを外す
              // playingAudio.currentTime[0] = 0;
          }
          $playingAudio = $(event.target);
      }
  
      for(let i = 0, l = $audioList.length; i < l; i++){
          $audioList[i].addEventListener("play", playAudioHandler);
      }
})();

 

  $("#hamburger2").on("click",function(){
      
    $(".nav2").css("height","400px");
    $(".nav2").css("padding","10px");
    $("#hamburger2").css("display","none");
   

  });

  $("#hamburger1").on("click",function(){
      
    $(".nav2").css("height","0");
    $(".nav2").css("padding","0");
    $("#hamburger2").css("display","block");
   
  });

  $(function(){
      var showFlag = false;
      var topBtn = $('#page-top');    
      topBtn.css('bottom', '-200px');
      var showFlag = false;
      
      $(window).scroll(function () {
          if ($(this).scrollTop() > 200) {
              if (showFlag == false) {
                  showFlag = true;
                  topBtn.stop().animate({'bottom' : '20px'}, 200); 
              }
          } else {
              if (showFlag) {
                  showFlag = false;
                  topBtn.stop().animate({'bottom' : '-100px'}, 200); 
              }
          }
      });
    
      topBtn.click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 500);
          return false;
      });
  
    });

    var startPos = 0,winScrollTop = 0;
   
    $(window).on('scroll',function(){
      winScrollTop = $(this).scrollTop();
      if (winScrollTop >= startPos) {
          if(winScrollTop >= 200){
              $('nav').addClass('hide');
              $('.nav2').addClass('hide');
          }
      } else {
          $('nav').removeClass('hide');
          $('.nav2').removeClass('hide');
      }
      startPos = winScrollTop;
  });
  

// var menus = ['#menu1','#menu2',"#menu3",'#menu4','#menu5',"#menu6"],

//     menuLength = menus.length;

// for(i = 0;i < menuLength;i++){

//   $(menus[i]).mouseenter(function() {
 
//     var off = $(menus[i]).offset();
    
//     var left = off.left, 
//         width = $(menus[i]).width();

//    $('#moveLine').css('left',left + 'px');
//    $('#moveLine').css('width', width + 'px');
   
// })

//   $(menus[i]).mouseleave(function() {

//    $('#moveLine').css('left','617px');
//    $('#moveLine').css('width', '45px');
   
// })

// }
 
 var defoff = $('#menu1').offset();

 var defleft = defoff.left, 
 defwidth = $('#menu1').outerWidth();


  $('#menu1').mouseenter(function() {
 
    var off = $('#menu1').offset();
    
    var left = off.left, 
        width = $('#menu1').outerWidth();

   $('#moveLine').css('left',left + 'px');
   $('#moveLine').css('width', width + 'px');
   
});

  $('#menu1').mouseleave(function() {

   $('#moveLine').css('left', defleft + 'px');
   $('#moveLine').css('width',  defwidth + 'px');
   
});


  $('#menu2').mouseenter(function() {
 
    var off = $('#menu2').offset();
    
    var left = off.left, 
        width = $('#menu2').outerWidth();

   $('#moveLine').css('left',left + 'px');
   $('#moveLine').css('width', width + 'px');
   
});

  $('#menu2').mouseleave(function() {

    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
});


  $('#menu3').mouseenter(function() {
 
    var off = $('#menu3').offset();
    
    var left = off.left, 
        width = $('#menu3').outerWidth();

   $('#moveLine').css('left',left + 'px');
   $('#moveLine').css('width', width + 'px');
   
});

  $('#menu3').mouseleave(function() {

    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
   
});


  $('#menu4').mouseenter(function() {
 
    var off = $('#menu4').offset();
    
    var left = off.left, 
        width = $('#menu4').outerWidth();

   $('#moveLine').css('left',left + 'px');
   $('#moveLine').css('width', width + 'px');
   
});

  $('#menu4').mouseleave(function() {

    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
   
});


  $('#menu5').mouseenter(function() {
 
    var off = $('#menu5').offset();
    
    var left = off.left, 
        width = $('#menu5').outerWidth();

   $('#moveLine').css('left',left + 'px');
   $('#moveLine').css('width', width + 'px');
   
});

  $('#menu5').mouseleave(function() {

    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
   
});


  $('#menu6').mouseenter(function() {
 
    var off = $('#menu6').offset();
    
    var left = off.left, 
        width = $('#menu6').outerWidth();

   $('#moveLine').css('left',left + 'px');
   $('#moveLine').css('width', width + 'px');
   
});

  $('#menu6').mouseleave(function() {

    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
   
});

  });

  $(window).on('load', function() {
 
    var defoff = $('#menu1').offset();

    var defleft = defoff.left, 
    defwidth = $('#menu1').outerWidth();
   
    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
   
   
  });
  



  



