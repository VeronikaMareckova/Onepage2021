
//skrolování sekcí skrolujeme na o naší pizze  video 112 html a css videa šetek


$(function(){
        
   /* Scroll to sections - menu */
   $(".jq--scroll-our-pizza").click(function(){
      $("html, body").animate({scrollTop: $(".jq--our-pizza").offset().top}, 1000);
      $("nav ul li").css("background","transparent");/*zbytek menu se neoznačí*/
      $("nav ul li.jq-0").css("background","#dc4f00"); /*odkaz 0 v menu označen*/
   });
   
   $(".jq--scroll-about-pizza").click(function(){
      $("html, body").animate({scrollTop: $(".jq--about-pizza").offset().top}, 1500);
      $("nav ul li").css("background","transparent");/*zbytek menu se neoznačí*/
      $("nav ul li.jq-1").css("background","#dc4f00"); /*odkaz 1 v menu označen*/
   });
   
   $(".jq--scroll-references").click(function(){
      $("html, body").animate({scrollTop: $(".jq--references").offset().top}, 1500);
      $("nav ul li").css("background","transparent");/*zbytek menu se neoznačí*/
      $("nav ul li.jq-2").css("background","#dc4f00"); /*odkaz 2 v menu označen*/
   });
   
   $(".jq--scroll-photogallery").click(function(){
      $("html, body").animate({scrollTop: $(".jq--photogallery").offset().top}, 1500);
      $("nav ul li").css("background","transparent");/*zbytek menu se neoznačí*/
      $("nav ul li.jq-3").css("background","#dc4f00");/*odkaz 3 v menu označen*/
   });
   
   $(".jq--scroll-contact-form").click(function(){
      $("html, body").animate({scrollTop: $(".jq--contact-form").offset().top}, 1500);
      $("nav ul li").css("background","transparent");/*zbytek menu se neoznačí*/
      $("nav ul li.jq-4").css("background","#dc4f00"); /*odkaz 4 v menu označen*/
   });

/*2 tlačítka v obrázku*/
    /* skrolování zatím vyřazeno
   $(".jq--scroll-tlacitko-1").click(function(){
      $("nav ul li").css("background","transparent"); zbytek menu se neoznačí - označení se vyruší
      $("html, body").animate({scrollTop: $(".jq--contact-form").offset().top}, 1500);
   });*/
   $(".jq--scroll-tlacitko-2").click(function(){
      $("nav ul li").css("background","transparent"); /*zbytek menu se neoznačí- označení se vyruší*/
      $("html, body").animate({scrollTop: $(".jq--contact-form").offset().top}, 1500);
   });

   /*obrázek logo*/
   $("#logo").click(function(){
      $("nav ul li").css("background","transparent");/*zbytek menu se neoznačí- označení se vyruší*/
   });
}); 
/* Přepíná mezi zobrazením a skrytím odkazů v navigační nabídce, když uživatel klikne na ikonu nabídky / lišty hamburgeru */
function myFunction() {
   var x = document.getElementById("myLinks");
   if (x.style.display === "block") {
     x.style.display = "none";
   } else {
     x.style.display = "block";
   }
 } 


