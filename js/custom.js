
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("signup").style.display="none";
  document.getElementById("mySidenav2").style.width = "0";
  document.getElementById("mySidenav1").style.width = "0";
  document.getElementById("about1").style.color="#fff";
}

function openNav1() {
  document.getElementById("mySidenav1").style.width = "350px";
  document.getElementById("signup").style.display="none";
  document.getElementById("mySidenav2").style.width = "0";
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("about1").style.background="none";
}
function openNav2() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("signup").style.display="none";
  document.getElementById("mySidenav1").style.width = "0";
  document.getElementById("mySidenav2").style.width = "350px";
}
function openNav3() {
  document.getElementById("mySidenav3").style.width = "300px";
  document.getElementById("mySidenav3").style.background = "#fff";

}
function openNav4() {
  document.getElementById("mySidenav4").style.width = "600px";

}

function closeNav1() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("signup").style.display="inline";
}
function closeNav() {
  document.getElementById("mySidenav1").style.width = "0";
  document.getElementById("signup").style.display="inline";
}
function closeNav2() {
   document.getElementById("mySidenav2").style.width = "0";
   document.getElementById("signup").style.display="inline";
}
function closeNav3() {
   document.getElementById("mySidenav3").style.width = "0";
}
function closeNav4() {
   document.getElementById("mySidenav4").style.width = "0";
}

(function($) {
  $(".sidenav a").on('click', function() {
		closeNav();
	});
    $(".btn-primary").on('click', function() {
     $(".btn-primary").css("outline","0px");
  });
    $("#about1").on('click',function(){
      $("#about1").addClass("main-titles");
      $("#menu-list1").removeClass("main-titles");
      $("#contact1").removeClass("main-titles");

    });
    $("#menu-list1").on('click',function(){
      $("#menu-list1").addClass("main-titles");
      $("#about1").removeClass("main-titles");
       $("#contact1").removeClass("main-titles");
     
    });
    $("#contact1").on('click',function(){
      $("#contact1").addClass("main-titles");
      $("#about1").removeClass("main-titles");
       $("#menu-list1").removeClass("main-titles");
    
    });
   
  $(".fa-twitter").mouseenter(function(){
     $(".fa-twitter").addClass("animated swing").css("color", "#1dcaff");
  });
  $(".fa-twitter").mouseleave(function(){
     $(".fa-twitter").removeClass("animated swing").css("color", "#fff");
  });
   $(".fa-facebook").mouseenter(function(){
     $(".fa-facebook").addClass("animated swing").css("color", "#4c68d7");
  });
   $(".fa-facebook").mouseleave(function(){
     $(".fa-facebook").removeClass("animated swing").css("color"," #fff");
  });
   $(".fa-instagram").mouseenter(function(){
     $(".fa-instagram").addClass("animated swing").css("color", "#e95950");
  });
   $(".fa-instagram").mouseleave(function(){
     $(".fa-instagram").removeClass("animated swing").css("color"," #fff");
  });



   $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
 $('#navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1500);
                if ($('.navbar-toggle').css('display') != 'none') {
                    $(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });

var windowWidth = $(window).width();
    if (windowWidth > 757) {

        
          
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').fadeIn(100);
                    $('.navbar').addClass('menu-bg');
                    $('.pull-left').css({"display": "inline","font-size": "100%"});
                    $('.sidenav').css("top","40px");
                } else {
                    $('.navbar').removeClass('menu-bg');
                    $('.sidenav').css("top","0px");

                }
            });
        
    }
 // $('#bs-example-navbar-collapse-1').localScroll();
  
  $(window).scroll(function(){
    if($(this).scrollTop()>200)
    {
      $('.scrollup').fadeIn();
    }
    else
    {
      $('.scrollup').fadeOut();
    }   
  });
  
  
})(jQuery);






