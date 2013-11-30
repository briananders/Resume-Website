$(document).ready(function(){
    $("#schangers").attr("class","in");

    setTimeout(function() {
        $("#schangers").attr("class","out");
        
        setTimeout(function() {
            $("#settings").css({
                '-moz-transform':'rotate(720deg)',
                '-webkit-transform':'rotate(720deg)',
                '-o-transform':'rotate(720deg)',
                '-ms-transform':'rotate(720deg)'
            });
        }, 2000);
    }, 3000);
});