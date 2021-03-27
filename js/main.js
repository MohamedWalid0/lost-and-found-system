$(document).ready(function () {

    $("#loading").fadeOut( 1000 , function(){
        
        $("body").css("overflow" , "auto") ;
        $("#loading").css("position" , "unset") ;
        $(".sk-folding-cube").css("display" , "none");
        
    })

});


let arrow = document.getElementById("arrow") ; // mouse cursor
document.body.addEventListener("mousemove" , function(e){

    arrow.style.left = e.pageX+"px" ;
    arrow.style.top = e.pageY+"px" ;

});


let navbar = document.getElementById("navbar") ;
let btnUp = document.getElementById("btnUp") ;


window.onscroll = () => {
    if (window.scrollY > 0) {
        navbar.classList.remove('nav-nonActive');
        navbar.classList.add('nav-active');

    } else {
        navbar.classList.remove('nav-active');
        navbar.classList.add('nav-nonActive');

    }

    if (window.scrollY > 200) {
        btnUp.style.display= "block" ;
    }
    else{
        btnUp.style.display= "none" ;

    }

};

function scrollToTop(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
}