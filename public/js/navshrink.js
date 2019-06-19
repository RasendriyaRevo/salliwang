$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 150 && !$('#nav').hasClass('shrink')){
            $('#nav').addClass('shrink');
            $("#nav a").css('color', 'white');
            $("#nav a.logo").css('background','url(../img/SWProductionWhite.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
        }else if($(this).scrollTop() < 150 && $('#nav').hasClass('shrink')){
            $('#nav').removeClass('shrink');
            $("#nav a.black").css('color', 'black');
            $("#nav a.white").css('color', 'white');
            $("#nav a.logo").css('background','url(../img/SWProductionBlack.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
        }
    });

    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash; $('html, body').animate({
            scrollTop: $(hash).offset().top - 60
        }, 1000, function(){
            window.location.hash = hash;
        });
        } 
    });
});