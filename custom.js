var footer = document.getElementById("footer");

$(document).ready(function(){
    $('#nav').click(function(){
        $('#bandeau').fadeOut("500");
        $('#nav').fadeOut("500");
        $('#return').fadeIn("500");
        jQuery(footer).css('display',"block");
        $('#footer').fadeIn("slow");
    });
        $('#return').click(function(){
        $('#bandeau').fadeIn("500");
        $('#nav').fadeIn("500");
        $('#return').fadeOut("500");
        jQuery(footer).css('display',"none")
        $('#footer').fadeOut("500");
    });
});
