$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 150 && !$('#nav').hasClass('shrink')){
            $('#nav').addClass('shrink');
            $("#nav a").css('color', 'white');
            $("#nav a.logo").css('background','url(../img/SWProductionWhite.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
            $("#nav .navbar-toggler").css('border-color','rgba(255, 255, 255, 1)');
            $("#nav .navbar-toggler-icon .a").css('background-image',"url(data:image/svg+xml,<svg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'><path stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/></svg>");
        }else if($(this).scrollTop() < 150 && $('#nav').hasClass('shrink')){
            $('#nav').removeClass('shrink');
            $("#nav a.black").css('color', 'black');
            $("#nav a.white").css('color', 'white');
            $("#nav a.logo").css('background','url(../img/SWProductionBlack.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
            $("#nav .navbar-toggler").css('border-color','rgba(0, 0, 0, .1)');
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