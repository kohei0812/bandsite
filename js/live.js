

$(window).on('load', function(){

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
  

  var defoff = $('#menu4').offset();

  var defleft = defoff.left, 
  defwidth = $('#menu4').outerWidth();

  // $('#moveLine').css('left', defleft + 'px');
  // $('#moveLine').css('width',  defwidth + 'px');

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
 
    var defoff = $('#menu4').offset();

    var defleft = defoff.left, 
    defwidth = $('#menu4').outerWidth();
   
    $('#moveLine').css('left', defleft + 'px');
    $('#moveLine').css('width',  defwidth + 'px');
   
   
  });


  



