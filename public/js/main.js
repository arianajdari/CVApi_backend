$(function() {
  // Auto play modal video
  $(".video").click(function () {
    var theModal = $(this).data("target"),
    videoSRC = $(this).attr("data-video"),
    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
    $(theModal + ' iframe').attr('src', videoSRCauto);
    $(theModal + ' button.close').click(function () {
      $(theModal + ' iframe').attr('src', videoSRC);
    });
  });

  var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
   $(".nav ul li a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
        $(this).addClass("active");
   });
});


 var scroll = new SmoothScroll('a[href*="#"]');

         window.sr = ScrollReveal();
        sr.reveal('.mainContent',{
          duration: 3000
        });

        sr.reveal('.historyLeft',{
          duration: 3000,
          origin: 'left',
          viewFactor: 0.3
        });

        sr.reveal('.historyRight',{
          duration: 3000,
          origin: 'right',
          viewFactor: 0.3
        });

        sr.reveal('.creator1',{
          duration: 2000,
          origin: 'bottom',
          viewFactor: 0.1
        });
        sr.reveal('.creator2',{
          duration: 2000,
          delay:500,
          origin: 'bottom',
          viewFactor: 0.2
        });