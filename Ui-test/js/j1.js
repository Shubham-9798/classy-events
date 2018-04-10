$(document).ready(function(){
    
  window.sr = ScrollReveal();
// JavaScript


sr.reveal('.scrol-1',{
               origin:'left',
               
               duration:1500,
               
                
              });


sr.reveal('.scrol-2',{
  origin:'right',
  
   duration:1500,
 
    
});



    sr.reveal('.scrol-nav',{
          origin:'bottom',
          
          duration:1500,
});

sr.reveal('.about-contant',{
  origin:'top',
  
  duration:1500,
});


$("#event").click(function() {
  $('html, body').animate({
      scrollTop: $("#events").offset().top
  }, 1000);

});
 

  // $(window).scroll(function() {
  //   if ($(document).scrollTop() > 50) {
  //     $(".bg-light").css("background-color","rgba(255, 255, 255, 0.836)!important");
  //   } else {
  //     $(".bg-light").css("background-color","transparent!important");
  //   }
  // });





  });