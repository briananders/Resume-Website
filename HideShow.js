(function ($) {
    $.fn.showHide = function (options) {
 
    //default vars for the plugin
        var defaults = {
            speed: 1000,
            easing: '',
            changeText: 0,
            showText: 'Show/Hide',
            hideText: 'Hide', // the button text to show when a div is open
		showSign: "+",
		hideSign: "-",
		showImg: "images/Show.png",
		hideImg: "images/Hide.png"
 
        };
        var options = $.extend(defaults, options);
 
        $(this).click(function () {
			// optionally add the class .toggleDiv to each div you want to automatically close
             $('.toggleDiv').slideUp(options.speed, options.easing);
             // this var stores which button you've clicked
             var toggleClick = $(this);
             // this reads the rel attribute of the button to determine which div id to toggle
             //var toggleDiv = $(this).attr('rel');
			 var toggleDiv = $(this).siblings('p');
             // here we toggle show/hide the correct div at the right speed and using which easing effect
             $(toggleDiv).slideToggle(options.speed, options.easing, function() {
             // this only fires once the animation is completed

             if(options.changeText==1){
				//$(toggleDiv).is(":visible") ? toggleClick.children("span").text(options.hideText) : toggleClick.children("span").text(options.showText);
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
        changeText: 1, // if you dont want the button text to change, set this to 0
        showText: 'Show',// the button text to show when a div is closed
        hideText: 'Hide', // the button text to show when a div is open
		showSign: "+",
		hideSign: "--",
		showImg: "images/Show.png",
		hideImg: "images/Hide.png"
    });
 
});