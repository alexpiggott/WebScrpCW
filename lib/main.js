// Main index (end user view)
window.addEventListener("load", function() {
	
    //AJAX gets the home/about/products files and stores their content as variables
	var homeContent, aboutContent, productsContent;
	AjaxGet("welcome.php", function(response) { homeContent = response; } );
	AjaxGet("about.php", function(response) { aboutContent = response; } );
    AjaxGet("products.php", function(response) { productsContent = response; } );

	var homeNav = document.getElementById("homeradio");
	homeNav.addEventListener("click", function()
    { document.getElementById("contentdiv").innerHTML = homeContent; } );
	
	var aboutNav = document.getElementById("aboutradio");
	aboutNav.addEventListener("click", function()
    { document.getElementById("contentdiv").innerHTML = aboutContent; } );
    
    var productsNav = document.getElementById("productsradio");
    productsNav.addEventListener("click", function()
    { document.getElementById("contentdiv").innerHTML = productsContent; } );
    
} );

	