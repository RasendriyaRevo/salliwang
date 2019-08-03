$(document).ready(function(){
    $(window).scroll(function(){
        if($(document).scrollTop() > 100){
            $('#nav').addClass('shrink');
            $("#nav a").css('color', 'white');
            $("#nav a.logo").css('background','url(img/SWProductionWhite.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
        }else{
            $('#nav').removeClass('shrink');
            $("#nav a.black").css('color', 'black');
            $("#nav a.white").css('color', 'white');
            $("#nav a.logo").css('background','url(img/SWProductionBlack.png) no-repeat');
            $("#nav a.logo").css('background-size','100%');
        }
    });
});

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
  let section = document.querySelector(link.hash);

  if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});