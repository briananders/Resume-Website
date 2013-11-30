$(document).ready(function(){
    $(".scb").click(function(){
        $("#mainstyle").attr("href", "css/" + $(this).attr("value") + ".css");
        $("#schangers").attr("class","out");
    });
    $("#settings").click(function() {
        if($("#schangers").attr("class") == "out")
            $("#schangers").attr("class","in");
        else
            $("#schangers").attr("class","out");
    });
    $(document).click(function(event) {
        if(!(event.target.id == "schangers" || event.target.id == "settings")) {
            $("#schangers").attr("class","out");
        }
    });
});

