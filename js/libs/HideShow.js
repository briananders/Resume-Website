(function ($) {
    $.fn.showHide = function (options) {
 
    //default vars for the plugin
        var defaults = {
            speed: 1000,
            easing: '',
            changeText: 0
        };
        var options = $.extend(defaults, options);
 
        $(this).click(function () {
             $('.toggleDiv').slideUp(options.speed, options.easing);
             var toggleClick = $(this);
             var toggleDiv = $(this).siblings('p');
             $(toggleDiv).slideToggle(options.speed, options.easing, function() {

             if(options.changeText==1){
                $(toggleDiv).is(":visible") ? toggleClick.children("span").text(options.hideText) : toggleClick.children("span").text(options.showText);
                $(toggleDiv).is(":visible") ? toggleClick.children("img").attr("src", options.hideImg) : toggleClick.children("img").attr("src", options.showImg);
             }
           });
 
          return false;
 
        });
 
    };
})(jQuery);


$(document).ready(function(){
   $('.show_hide').showHide({
        speed: 400,  // speed you want the toggle to happen
        easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
        changeText: 1 // if you dont want the button text to change, set this to 0
    });
});