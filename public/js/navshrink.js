$(document).ready(function(){
    var x = window.location.href;
    if(x == "http://127.0.0.1:8000/about" || x == "http://127.0.0.1:8000/contact"){
        $('#nav').addClass('shrink');
        $("#nav a").css('color', 'white');
        $("#nav a.logo").css('background','url(img/swproductionwhite.png) no-repeat');
        $("#nav a.logo").css('background-size','100%');
    }else{
        $(window).scroll(function(){
            if($(this).scrollTop() > 150 && !$('#nav').hasClass('shrink')){
                $('#nav').addClass('shrink');
                $("#nav a").css('color', 'white');
                $("#nav a.logo").css('background','url(img/swproductionwhite.png) no-repeat');
                $("#nav a.logo").css('background-size','100%');
            }else if($(this).scrollTop() < 150 && $('#nav').hasClass('shrink')){
                $('#nav').removeClass('shrink');
                $("#nav a.black").css('color', 'black');
                $("#nav a.white").css('color', 'white');
                $("#nav a.logo").css('background','url(img/swproductionblack.png) no-repeat');
                $("#nav a.logo").css('background-size','100%');
            }
        });
    }

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