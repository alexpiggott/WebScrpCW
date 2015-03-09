<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8> 
	<title>Home - UP696811 WEBSCRP Coursework</title>
    <link rel="stylesheet" title="Webscript Style" href="inc/cwkstyle.css">
    <script src="lib/ajaxget.js"></script>
    <script src="lib/main.js"></script>
    
</head>
<body>
    <header>
        <h1>Company Name</h1>

        <nav class="userswitch">
            <ul>
                <li><a href="/cwk/cms/">CMS</a></li>
                <li><a href="/cwk/admin/">Admin</a></li>
                <li><a href="basket.html">Basket</a></li>
            </ul>
        </nav>
        <nav class="mainnav">
            <input type="radio" name="main" id="homeradio"><label for="homeradio">Home</label>
            <input type="radio" name="main" id="aboutradio"><label for="aboutradio">About</label>
            <input type="radio" name="main" id="productsradio"><label for="productsradio">Products</label>
        </nav>
    </header>
    
    <div class="searchbar">
        <form>
            <input type="search" name="searchform" placeholder="Search products" maxlength="150">
        </form>
    </div>
    
    <div id="contentdiv">
    </div>
    
</body>
</html>