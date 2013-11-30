function getcss(cssfile){
	loadcss = document.createElement('link')
	loadcss.setAttribute("rel", "stylesheet")
	loadcss.setAttribute("type", "text/css")
	loadcss.setAttribute("href", cssfile)
	document.getElementsByTagName("head")[0].appendChild(loadcss)

}

if(screen.width <= 999){
	getcss('small.css');
	// Defines the .css file you want to load for this range (800x600.css)
}
else 
{
	getcss('style.css');
	//This else statement has "if" condition. If none of the following criteria are met, load 1280x1024.css
}