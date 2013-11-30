$(document).ready(function(){
    
    $(".scb").click(function(){
        $("#mainstyle").attr("href", "css/styles/" + $(this).attr("value") + ".css");
        $("#schangers").attr("class","out");
        $(".scb").removeClass("selected");
        $(this).addClass("selected");
    });
    $("#settings").click(function() {
        if($("#schangers").attr("class") == "out") {
            $("#schangers").attr("class","in");
        }
        else {
            $("#schangers").attr("class","out");
        }
    });
    $(document).click(function(event) {
        if(!(event.target.id == "schangers" || event.target.id == "settings" || event.target.id == "insidesettings")) {
            $("#schangers").attr("class","out");
        }
    });

    //function to switch tabs
    $("#navwrap a").click(function() {
        //slides up all containers
        $(".container").slideUp("slow");
        //removes all "selected" classes
        $("#navwrap a").removeClass("selected");
        //makes the clicked tab "selected"
        $(this).addClass("selected");
        //reveals the clicked tabs corresponding container.
        $("#" + $(this).attr("value")).slideToggle("slow");
        $("title").attr("value", "Brian Anders | " + $(this).attr("value"));
    });

    $('.show_hide').click(function() {
        $(this).siblings("p").slideToggle("slow");
    });
});

