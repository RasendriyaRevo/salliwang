$(document).ready(function(){
    $(window).scroll(function(){
        if($(document).scrollTop() > 100){
            $('#nav').addClass('shrink');
            $("#nav a").css('color', 'white');
            $("#nav a.logo").css('background','url(../../img/logob.png) no-repeat');
        }else{
            $('#nav').removeClass('shrink');
            $("#nav a.black").css('color', 'black');
            $("#nav a.white").css('color', 'white');
            $("#nav a.logo").css('background','url(../../img/logoa.png) no-repeat');
        }
    });
});