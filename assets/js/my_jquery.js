$(document).ready(function(){
    $("#a_ars_poetica").click(function (){
        $(this).hide();
        $("#ars_poetica").slideToggle("slow");
    });
});

$(".transparentBackground").hover(function(){
    $(this).css('background-color', 'white');
    $(this).children('h3').css('color', 'black');

},function(){
    $(this).css('background-color', 'burlywood');
    $(this).children('h3').css('color', 'white');
});

$("#button_to_top").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});
