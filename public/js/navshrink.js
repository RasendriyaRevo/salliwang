$(document).ready(function(){
    $(window).scroll(function(){
        if($(document).scrollTop() > 100){
            $('#nav').addClass('shrink');
            $("#nav a").css('color', 'white');
            $("#nav a.logo").css('background','url(../public/img/SWProductionWhite.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
        }else{
            $('#nav').removeClass('shrink');
            $("#nav a.black").css('color', 'black');
            $("#nav a.white").css('color', 'white');
            $("#nav a.logo").css('background','url(../public/img/SWProductionBlack.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
        }
    });
});
$(document).ready(function(){
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash; $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      } 
    });
  });