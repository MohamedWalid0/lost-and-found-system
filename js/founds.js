$(document).ready(function () {

    $("#loading").fadeOut( 1000 , function(){
        
        $("body").css("overflow" , "auto") ;
        $("#loading").css("position" , "unset") ;
        $(".sk-folding-cube").css("display" , "none");
        
    })

});


function scrollToTop(){
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}





let ex = document.getElementById("exit") ;
let pop = document.getElementById("pop") ;

function showPopUp(){
    pop.style.display="block" ;
    pop.style.top="50%" ;
    pop.style.transition="bottom 1s" ;
}

function closePopUp(){
    pop.style.display="none" ;
}