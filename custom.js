$(document).ready(function(){
    $('#nav').click(function(){
        $('#bandeau').fadeOut("slow");
        $('#nav').fadeOut("slow");
        $('#return').fadeIn("slow");
    });
    $('#return').click(function(){
        $('#bandeau').fadeIn("slow");
        $('#nav').fadeIn("slow");
    });
});

